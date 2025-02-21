<?php
include('Petshop.php');
session_start();

// Ensure session array exists
if (!isset($_SESSION['listBarang']) || !is_array($_SESSION['listBarang'])) {
    $_SESSION['listBarang'] = [];
}
$listBarang = array_map('unserialize', $_SESSION['listBarang']); // Unserialize session data

// Handle Add Item
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_item'])) {
    $id = $_POST['Id'];
    $name = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];
    $foto = "S__11837443.jpg"; // Default image path

    // Create new object and add it to the session array
    $newItem = new PetShop($id, $name, $kategori, $harga, $foto);
    $_SESSION['listBarang'][] = serialize($newItem);

    // Redirect to prevent form resubmission
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}

// Handle Update (WITHOUT IMAGE EDITING)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update']) && isset($_POST['edit_index'])) {
    $index = (int) $_POST['edit_index'];

    if (isset($_SESSION['listBarang'][$index])) {
        // Fetch existing item & keep the old image
        $existingItem = unserialize($_SESSION['listBarang'][$index]);
        $foto = $existingItem->getFoto(); // Retain old image

        // Update object properties
        $updatedItem = new PetShop($_POST['Id'], $_POST['nama'], $_POST['kategori'], $_POST['harga'], $foto);

        // Save back to session
        $_SESSION['listBarang'][$index] = serialize($updatedItem);
    }

    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}

// Handle deleting a single item
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];

    // Remove item from session
    $_SESSION['listBarang'] = array_values(array_filter($_SESSION['listBarang'], function ($item) use ($delete_id) {
        return unserialize($item)->getID() !== $delete_id;
    }));

    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}

// Handle deleting all items
if (isset($_POST['delete_all'])) {
    $_SESSION['listBarang'] = []; // Properly reset session

    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}

$editIndex = -1; // Default: No item selected
$editItem = null;

// Check if an item is being edited
if (isset($_POST['edit']) && isset($_POST['edit_index'])) {
    $editIndex = (int) $_POST['edit_index'];
    if (isset($listBarang[$editIndex])) {
        $editItem = $listBarang[$editIndex];
    }
}

// Refresh list from session
$listBarang = array_map('unserialize', $_SESSION['listBarang']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetShop PHP</title>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
        }

        th, td {
            text-align: center;
            border: 1px solid black;
            padding: 8px;
        }

        img {
            height: 50px;
            width: auto;
        }

        .delete-btn {
            background-color: red;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        .delete-btn:hover {
            background-color: darkred;
        }

        .delete-all-btn {
            background-color: black;
            color: white;
            border: none;
            padding: 10px;
            margin-top: 10px;
            cursor: pointer;
        }

        .delete-all-btn:hover {
            background-color: darkgray;
        }
    </style>
</head>
<body>
    <h2>Daftar Barang</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
        <?php if (!empty($listBarang)) { ?>
            <?php foreach ($listBarang as $i => $data) { ?>
            <tr>
                <td><?= htmlspecialchars($data->getID()) ?></td>
                <td><?= htmlspecialchars($data->getName()) ?></td>
                <td><?= htmlspecialchars($data->getKategori()) ?></td>
                <td><?= htmlspecialchars($data->getHarga()) ?></td>
                <td>
                    <img src="<?= htmlspecialchars($data->getFoto()) ?>" alt="Foto">
                </td>
                <td>
                    <!-- Edit Button -->
                    <form method="POST">
                        <input type="hidden" name="edit_index" value="<?= $i ?>">
                        <button type="submit" name="edit">Edit</button>
                    </form>
                </td>
                <td>
                    <a href="?delete_id=<?= htmlspecialchars($data->getID()) ?>" class="delete-btn" onclick="return confirm('Are you sure you want to delete this item?');">
                        Delete
                    </a>
                </td>
            </tr>
            <?php } ?>
        <?php } else { ?>
            <tr>
                <td colspan="6">No data available</td>
            </tr>
        <?php } ?>
    </table>

    <!-- Delete All Button -->
    <?php if (!empty($listBarang)) { ?>
        <form method="POST">
            <button type="submit" name="delete_all" class="delete-all-btn" onclick="return confirm('Are you sure you want to delete all items?');">
                Delete All
            </button>
        </form>
    <?php } ?>

    <h2><?= $editItem ? 'Edit Barang' : 'Tambah Barang' ?></h2>
    <form method="POST">
        <input type="hidden" name="edit_index" value="<?= $editIndex ?>">
        
        ID: <input type="text" name="Id" value="<?= $editItem ? $editItem->getID() : '' ?>" required><br>
        Nama: <input type="text" name="nama" value="<?= $editItem ? $editItem->getName() : '' ?>" required><br>
        Kategori: <input type="text" name="kategori" value="<?= $editItem ? $editItem->getKategori() : '' ?>" required><br>
        Harga: <input type="number" name="harga" value="<?= $editItem ? $editItem->getHarga() : '' ?>" required><br>
        
        <?php if ($editItem) { ?>
            <button type="submit" name="update">Update</button>
        <?php } else { ?>
            <button type="submit" name="add_item">Submit</button>
        <?php } ?>
    </form>
</body>
</html>
