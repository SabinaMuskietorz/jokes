<?php
namespace Ijdb\controllers;
class CategoryController {
    private $categoriesTable;
    public function __construct($categoriesTable) {
        $this->categoriesTable = $categoriesTable;
    }
    public function list() {
        $categories = $this->categoriesTable->findAll();
        return [
            'template' => 'categorylist.html.php',
            'title' => 'Category list',
            'variables' => [
                'categories' => $categories
                ]
            ];
        }
    public function delete() {
        $this->categoriesTable->delete($_POST['id']);
        header('location: /category/list');
    }
    public function edit() {
        if (isset($_POST['submit'])) {
            $this->categoriesTable->save($_POST['category']);
            header('location: /category/list');
        }
        else {
            if (isset($_GET['id'])) {
                $result = $this->categoriesTable->find('id', $_GET['id']);
                $category = $result[0];
            }
            else {
                $category = false;
            }
            return [
                'template' => 'editcategory.html.php',
                'variables' => ['category' => $category],
                'title' => 'Edit category'
            ];
        }
    }
}