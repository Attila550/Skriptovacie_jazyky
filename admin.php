<?php
include('database.php');
if (isset($_POST['edit_portfolio'])) {
    $data = [
        'id' => $_POST['id'],
        'img'  => $_POST['img']
    ];
    $query = "UPDATE portfolioes SET img = ? WHERE id = ?";
    $query_run = $GLOBALS['mysqli']->prepare($query);
    $query_run->bind_param('ssdsi', 
                                     $data['img'],
                                     $data['id']);
    $query_run->execute([
                        $data['img'],
                        $data['id']]);
    if ($query_run) {
        header("LOCATION: add.php");
    } else {
        echo "Message not sent";
    }
};
if (isset($_POST['add_portfolio'])) {
    $data = [
        'brand' => $_POST['brand'],
        'model' => $_POST['model'],
        'price' => $_POST['price'],
       
        'img'  => $_POST['img']
    ];
    $query = "INSERT INTO portfolio(img) VALUES (?)";
    $query_run = $GLOBALS['mysqli']->prepare($query);
    $query_run->bind_param('ssds', $data['img']);
    $query_run->execute([$data['img']]);
    if ($query_run) {
        header("LOCATION: add.php");
    } else {
        echo "Message not sent";
    }
};

if (isset($_POST['remove_portfolio'])) {
    $data = [
        'id' => $_POST['id'],
        'img'  => $_POST['img']
    ];
    $query = "DELETE FROM portfolioes WHERE id = ?";
    $query_run = $GLOBALS['mysqli']->prepare($query);
    $query_run->bind_param('i',  $data['id']);
    $query_run->execute([$data['id']]);
    if ($query_run) {
        header("LOCATION: add.php");
    } else {
        echo "Message not sent";
    }
};