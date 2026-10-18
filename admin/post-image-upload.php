<?php

require_once __DIR__ . '/../includes/admin-auth.php';

bethammi_start_admin_session();
header('Cache-Control: no-store, private');
header('Content-Type: application/json; charset=utf-8');

function bethammi_post_image_upload_response(array $payload, $status = 200)
{
    http_response_code($status);
    $json = json_encode($payload, JSON_UNESCAPED_SLASHES | JSON_INVALID_UTF8_SUBSTITUTE);
    echo $json === false ? '{"error":"The response could not be encoded."}' : $json;
}

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    header('Allow: POST');
    bethammi_post_image_upload_response(['error' => 'Use the post editor to upload an image.'], 405);
    exit;
}

if (!isset($_SESSION['admin_user'])) {
    bethammi_post_image_upload_response(['error' => 'Sign in to upload post images.'], 401);
    exit;
}

if (!bethammi_check_admin_csrf()) {
    bethammi_post_image_upload_response(['error' => 'Your session expired. Refresh the page and try again.'], 403);
    exit;
}

$upload = $_FILES['image'] ?? null;
if (!is_array($upload) || !isset($upload['error'], $upload['tmp_name'], $upload['size'])) {
    bethammi_post_image_upload_response(['error' => 'Choose an image file to upload.'], 422);
    exit;
}

if ((int) $upload['error'] !== UPLOAD_ERR_OK) {
    $message = (int) $upload['error'] === UPLOAD_ERR_INI_SIZE || (int) $upload['error'] === UPLOAD_ERR_FORM_SIZE
        ? 'The image is larger than the server allows.'
        : 'The image upload did not complete. Please try again.';
    bethammi_post_image_upload_response(['error' => $message], 422);
    exit;
}

$maxFileSize = 8 * 1024 * 1024;
if ((int) $upload['size'] < 1 || (int) $upload['size'] > $maxFileSize) {
    bethammi_post_image_upload_response(['error' => 'Choose an image smaller than 8 MB.'], 422);
    exit;
}

if (!is_uploaded_file($upload['tmp_name'])) {
    bethammi_post_image_upload_response(['error' => 'The uploaded image could not be verified.'], 422);
    exit;
}

$imageInfo = @getimagesize($upload['tmp_name']);
$imageTypes = [
    IMAGETYPE_JPEG => ['mime' => 'image/jpeg', 'extension' => 'jpg'],
    IMAGETYPE_PNG => ['mime' => 'image/png', 'extension' => 'png'],
    IMAGETYPE_WEBP => ['mime' => 'image/webp', 'extension' => 'webp'],
];
$imageType = is_array($imageInfo) ? ($imageInfo[2] ?? null) : null;
if (!isset($imageTypes[$imageType])) {
    bethammi_post_image_upload_response(['error' => 'Use a JPEG, PNG, or WebP image.'], 422);
    exit;
}

[$width, $height] = $imageInfo;
if ($width < 1 || $height < 1 || $width > 12000 || $height > 12000 || $width * $height > 40000000) {
    bethammi_post_image_upload_response(['error' => 'The image dimensions are too large.'], 422);
    exit;
}

$finfo = finfo_open(FILEINFO_MIME_TYPE);
if ($finfo === false) {
    error_log('Beth Ammi post image upload failed: fileinfo is unavailable.');
    bethammi_post_image_upload_response(['error' => 'Image validation is unavailable right now.'], 500);
    exit;
}
$mimeType = finfo_file($finfo, $upload['tmp_name']);
finfo_close($finfo);
if ($mimeType !== $imageTypes[$imageType]['mime']) {
    bethammi_post_image_upload_response(['error' => 'The uploaded file is not a supported image.'], 422);
    exit;
}

$uploadDirectory = dirname(__DIR__) . '/assets/images/posts';
if (!is_dir($uploadDirectory) && !mkdir($uploadDirectory, 0755, true) && !is_dir($uploadDirectory)) {
    error_log('Beth Ammi post image upload failed: unable to create image directory.');
    bethammi_post_image_upload_response(['error' => 'The image could not be saved right now.'], 500);
    exit;
}

$filename = bin2hex(random_bytes(16)) . '.' . $imageTypes[$imageType]['extension'];
$destination = $uploadDirectory . '/' . $filename;
if (!move_uploaded_file($upload['tmp_name'], $destination)) {
    error_log('Beth Ammi post image upload failed: unable to move validated image.');
    bethammi_post_image_upload_response(['error' => 'The image could not be saved right now.'], 500);
    exit;
}

$siteBase = rtrim(str_replace('\\', '/', dirname(dirname((string) ($_SERVER['SCRIPT_NAME'] ?? '/admin/post-image-upload.php')))), '/');
bethammi_post_image_upload_response(['url' => $siteBase . '/assets/images/posts/' . $filename]);
