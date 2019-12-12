<?php
require_once '../includes/helpers.php';

likePlaylist($_GET['id']);

header('Location: ../');

exit;