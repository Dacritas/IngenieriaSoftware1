<?php
session_start();
include 'Inventory.php';
$inventory = new Inventory();
//cerrar sesion
if(!empty($_GET['action']) && $_GET['action'] == 'logout') {
	session_unset();
	session_destroy();
	header("Location:index.php");
}

if(!empty($_POST['action']) && $_POST['action'] == 'getInventoryDetails') {
	$inventory->getInventoryDetails();
}
// lista de clientes
if(!empty($_POST['action']) && $_POST['action'] == 'customerList') {
	$inventory->getCustomerList();
}
//agregar cliente
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'customerAdd'){
	$inventory->saveCustomer();
}
//obtener cliente
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'getCustomer'){
	$inventory->getCustomer();
}
//actualizar cliente
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'customerUpdate'){
	$inventory->updateCustomer();
}
//eliminar cliente
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'customerDelete'){
	$inventory->deleteCustomer();
}
// lista de categorias
if(!empty($_POST['action']) && $_POST['action'] == 'categoryList') {
	$inventory->getCategoryList();
}
//guardar categoria
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'categoryAdd'){
	$inventory->saveCategory();
}
//obtener categoria
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'getCategory'){
	$inventory->getCategory();
}
//actualizar categoria
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'updateCategory'){
	$inventory->updateCategory();
}
//eliminar categoria
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'deleteCategory'){
	$inventory->deleteCategory();
}
// lista de marcas
if(!empty($_POST['action']) && $_POST['action'] == 'listBrand') {
	$inventory->getBrandList();
}
//agregar marca
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'addBrand'){
	$inventory->saveBrand();
}
//obtener marca
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'getBrand'){
	$inventory->getBrand();
}
//actualizar marca
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'updateBrand'){
	$inventory->updateBrand();
}
//eliminar marca
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'deleteBrand'){
	$inventory->deleteBrand();
}
// lista de productos
if(!empty($_POST['action']) && $_POST['action'] == 'listProduct') {
	$inventory->getProductList();
}
//obtener categorias y marcas
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'getCategoryBrand') {
	echo $inventory->getCategoryBrand($_POST['categoryid']);
}
//agregar productos
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'addProduct') {
	$inventory->addProduct();
}
//obtener detalles de productos
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'getProductDetails') {
	$inventory->getProductDetails();
}
//actualizar productos
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'updateProduct'){
	$inventory->updateProduct();
}
//eliminar productos
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'deleteProduct'){
	$inventory->deleteProduct();
}
//ver productos
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'viewProduct'){
	$inventory->viewProductDetails();
}
// lista de proveedores
if(!empty($_POST['action']) && $_POST['action'] == 'supplierList') {
	$inventory->getSupplierList();
}
//agregar proveedores
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'addSupplier'){
	$inventory->addSupplier();
}
//obtener proveedores
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'getSupplier'){
	$inventory->getSupplier();
}
//actualizar proveedores
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'updateSupplier'){
	$inventory->updateSupplier();
}
//eliminar proveedores
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'deleteSupplier'){
	$inventory->deleteSupplier();
}
// lista de compras
if(!empty($_POST['action']) && $_POST['action'] == 'listPurchase') {
	$inventory->listPurchase();
}
//agregar compras
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'addPurchase'){
	$inventory->addPurchase();
}
//obtener compras
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'getPurchaseDetails'){
	$inventory->getPurchaseDetails();
}
//actualizar compras
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'updatePurchase'){
	$inventory->updatePurchase();
}
//eliminar compras
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'deletePurchase'){
	$inventory->deletePurchase();
}
// lista de ventas
if(!empty($_POST['action']) && $_POST['action'] == 'listOrder') {
	$inventory->listOrders();
}
//agregar ventas
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'addOrder'){
	$inventory->addOrder();
}
//obtener ventas
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'getOrderDetails'){
	$inventory->getOrderDetails();
}
//actualizar ventas
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'updateOrder'){
	$inventory->updateOrder();
}
//eliminar ventas
if(!empty($_POST['btn_action']) && $_POST['btn_action'] == 'deleteOrder'){
	$inventory->deleteOrder();
}

