CakePHP Shopping Cart


<div class="px-4 md:px-0 relative prose sm:prose-lg lg:prose-xl mx-auto pt-2"># Build a shopping cart with CakePHP and jQuery (part 1) > There are plenty of open source shopping cart in the market right now. However we think it is important for a developer to understand how a shopping cart works. > > In this series we are going to build a simple shopping cart using CakePHP and jQuery. Please note, we focus on building the common functions of a shopping cart using CakePHP, such as adding product to shopping cart, removing product to shopping cart as well dynamically update shopping cart using ajax. Its purpose is to demonstrate the basics of building a shopping cart. Hence it is not a production ready piece; there are lots of features you need to add before it goes live for production. > > This series is for beginners who are learning CakePHP. Let us get started. Download link of entire source code is provided in part 2 of this series. ## Preparation * Download Bootstrap framework from [this URL](http://getbootstrap.com/). We are using Bootstrap 3.0.2 in this series for the front-end design. Extract downloaded zip file and remove original CSS and JavaScript files, we only need to keep their minified version. * Download CakePHP from [this URL](https://github.com/cakephp/cakephp/zipball/2.4.3). We are using CakePHP 2.4.3 for this tutorial. * Create a database. We have created a database called "cakephp_shopping_cart". You can name the database based on your preference. * Setup CakePHP properly, make sure it can connect to database. If you are not familiar with setting up, read [this page](http://book.cakephp.org/2.0/en/tutorials-and-examples/blog/blog.html) first. It will go through steps of setting up a basic CakePHP application. * Download "s4.jpg", "comment.jpg" and "note3.jpg" to CakePHP's directory "app/webroot/img/". These three images are used for the products' photos. ## Database design Design a very simple database table "products" as below. It stores products' information. The idea here is to demonstrate how CakePHP Model works with database table. ![cap forum erd](https://www.startutorial.com/img/cakephp-shopping-cart-db.png) Import the database table via following codes: CREATE TABLE products ( id INT(11) NOT NULL AUTO_INCREMENT, name VARCHAR(250) NOT NULL, price FLOAT NOT NULL, image VARCHAR(250) NOT NULL, PRIMARY KEY (id) ) ENGINE=InnoDB DEFAULT CHARSET=utf8; Insert some sample products data as well. As you can see, we are not going to build a backend system to manage products in this series. Some sample products data are needed. INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES (NULL, 'Samsung Galaxy S4', '600', '/img/s4.jpg'); INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES (NULL, 'Samsung Galaxy Note 3', '500', '/img/note3.jpg'); INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES (NULL, 'Samsung Comment 3', '400', '/img/comment.jpg'); ## Install Bootstrap In this step, we will place Bootstrap resources accordingly to CakePHP application. 1\. Copy "fonts" folder from downloaded Bootstrap files to CakePHP's directory "app/webroot". 2\. Copy "bootstrap.min.css" file from downloaded Bootstrap files to CakePHP's directory "app/webroot/css". 3\. Copy "bootstrap.min.js" file from downloaded Bootstrap files to CakePHP's directory "app/webroot/js". Now the "app/webroot" directory should look similar as below: ![img](https://www.startutorial.com/img/cakephp-shopping-cart-bootstrap.png) The highlighted parts are what we have added. ## Edit default layout file Now if you navigate to the installed CakePHP application, you should view a simple page as below, which indicates CakePHP has been installed properly. ![img](https://www.startutorial.com/img/cakephp-shopping-cart-index.png) In this step, we need to edit the "default.ctp" layout file. Specifically we need to load the Bootstrap resources (JavaScript and CSS files). And construct a simple layout for our shopping cart. After editting, "app/View/Layouts/default.ctp" should look like below: Html->charset(); ?> <title>CakePHP Shopping Cart</title> Html->meta('icon'); echo $this->Html->css('bootstrap.min.css'); echo $this->fetch('meta'); echo $this->fetch('css'); echo $this->fetch('script'); ?> <style>body { padding-top: 20px; padding-bottom: 20px; } .navbar { margin-bottom: 20px; }</style>

<div class="container">

<nav class="navbar navbar-default" role="navigation">

<div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>[CakePHP Shopping Cart](#)</div>

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

*   Html->link('<span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart <span class="badge" id="cart-counter">0</span>', array('controller'=>'carts','action'=>'view'),array('escape'=>false));?>

</div>

</nav>

fetch('content'); ?></div>

Html->script('bootstrap.min'); ?> You have probably noticed, this is a very simple layout file. It has a top navigation bar with a content area. Pay attention to the right corner shopping cart icon. We have assigned an element ID "cart-counter" to it. We will use this ID to identify and update its value later in the application. Now the application's default page should look alike below: ![img](https://www.startutorial.com/img/cakephp-shopping-cart-index-new.png) ## The end In [part 2](https://www.startutorial.com/articles/view/build-a-shopping-cart-with-cakephp-and-jquery-part-2) of this series. We are going to implement the core part of shopping cart. Displaying products from database, adding product to cart as well as updating shopping cart. Stay tuned! Hopefully this simple tutorial helped you with your development. If you like our post, please follow us on [Twitter](http://twitter.com/startutorial) and help spread the word. We need your support to continue. If you have questions or find our mistakes in above tutorial, do leave a comment below to let us know.</div>



<div class="relative py-2 bg-white overflow-hidden border">

<div class="z-50 flex flex-col justify-center bg-center bg-cover bg-no-repeat">

<div class="grid place-items-center p-2 bg-white rounded-3xl space-y-2">

<div class="flex items-center justify-center space-x-3">[<span>Share on Facebook</span>](https://www.facebook.com/sharer/sharer.php?u=https://startutorial.com/view/build-a-shopping-cart-with-cakephp-and-jquery-part-2"e=Build%20A%20Shopping%20Cart%20With%20Cakephp%20And%20Jquery%20Part%202) [<span>Share on Twitter</span>](https://twitter.com/share?text=Build%20A%20Shopping%20Cart%20With%20Cakephp%20And%20Jquery%20Part%202 @startutorial&url=https://startutorial.com/view/build-a-shopping-cart-with-cakephp-and-jquery-part-2) [<span>Email</span>](mailto:?body=hey,checkout this link at https://startutorial.com/view/build-a-shopping-cart-with-cakephp-and-jquery-part-2&subject=Build%20A%20Shopping%20Cart%20With%20Cakephp%20And%20Jquery%20Part%202)</div>

</div>

</div>

<div class="px-4 md:px-0 relative prose sm:prose-lg lg:prose-xl mx-auto pt-2"># Build a shopping cart with CakePHP and jQuery (part 2) > In this tutorial, we are going to implement functions for displaying products, adding product to shopping car as well as update shopping cart. At the end of this tutorial, a download link is provided for downloading the full source code. > > Let us get started. Download link of entire source code is provided at the end of this tutorial. ## Display proudcts and view product's detail In part 1, we have inserted some sample data to "products" table. Now let us build corresponding controller, model and view for "products" table. Create model file "app/Model/Product.php" with code below: "Product" class does not do anything specific; it is currently just a placeholder. In case you need to add additional features to this application, you may want to add more functions to this class. Create model file "app/Controller/ProductsController.php" with code below:`` set('products', $this->Product->find('all')); } public function view($id) { if (!$this->Product->exists($id)) { throw new NotFoundException(__('Invalid product')); } $product = $this->Product->read(null,$id); $this->set(compact('product')); } } ?> There are two functions in the controller class. Each of them serves a view of thier own. 1\. **public function index():** This functions simply gets all products' data and set it to its corresponding view file. 2\. **public function view():** This function finds a product's detail data and set it to its corresponding view file. For each controller's action, we need a view file. Create view file "app/View/Products/index.ctp" with code below, this is the view file for displaying all products.

<div class="row">

<div class="col-sm-6 col-md-4">

<div class="">Html->link($this->Html->image($product['Product']['image']), array('action'=>'view',$product['Product']['id']), array('escape'=>false,'class'=>'thumbnail'));?>

<div class="caption">##### Price: $</div>

</div>

</div>

</div>

Create view file "app/View/Products/view.ctp" with code below, this is the view file for viewing a product's detail. [?](https://www.startutorial.com/articles/view/build-a-shopping-cart-with-cakephp-and-jquery-part-2#)

<div class="row">

<div class="col-lg-12">1\. Html->link('Home','/');?></div>

</div>

<div class="row">

<div class="col-lg-4 col-md-4">Html->image($product['Product']['image'],array('class'=>'thumbnail'));?></div>

<div class="col-lg-8 col-md-8">## Price: $ Form->create('Cart',array('id'=>'add-form','url'=>array('controller'=>'carts','action'=>'add')));?> Form->hidden('product_id',array('value'=>$product['Product']['id']))?> Form->submit('Add to cart',array('class'=>'btn-success btn btn-lg'));?> Form->end();?></div>

</div>

Now we have created the file views we needed for this section. However navigate to index page of the shopping cart. It still gives us the CakePHP's default page. What we want is that, the index page should display all products. Adding a routing rule to the Router can do this. Open app/Config/routes.php, and add following line to the beginning of the file: Router::connect('/', array('controller' => 'products', 'action' => 'index')); This tells the shopping cart to show "products/index" page by default. Now you should be see following page. ![img](https://www.startutorial.com/img/cakephp-shopping-cart-display.png) Clicking on the thumbnail image, it should show you below. ![img](https://www.startutorial.com/img/cakephp-shopping-cart-view.png) ## Add product to shopping cart You should probably notice that, the "Add to cart" button is not yet working. That is what we are going to fix in this section. Since we do not have a database table to store shopping cart's items. We are going to use Session. Let us create a powerful "Cart" model, which we will be using to represent the shopping cart. It is a model without database table. read();         if (null!=$allProducts) {             if (array_key_exists($productId, $allProducts)) {                 $allProducts[$productId]++;             } else {                 $allProducts[$productId] = 1;             }         } else {             $allProducts[$productId] = 1;         }         $this->saveProduct($allProducts);     }     /*      * get total count of products      */     public function getCount() {         $allProducts = $this->readProduct();         if (count($allProducts)<1) {             return 0;         }         $count = 0;         foreach ($allProducts as $product) {             $count=$count+$product;         }         return $count;     }     /*      * save data to session      */     public function saveProduct($data) {         return CakeSession::write('cart',$data);     }     /*      * read cart data from session      */     public function readProduct() {         return CakeSession::read('cart');     } } Let us divide into this class. Since this model class is not using any database table, we use "**public $useTable = false;**" to tell CakePHP not to look for its table. We are going to store the shopping items into Session using structure as below: array( product_id => number_of_items ... ) Let us take a look at each function: 1\. **public function addProduct($productId):** it takes a $productId and add it to the shopping cart accordingly. It will either increase the item's counter or add a new item to the array. 2\. **public function getCount():** it loop through the array and count number of products in cart. 3\. **public function saveProduct():** a simple wrap function, it stores data to Session using "cart" as the key. 4\. **public function readProduct():** it reads data from Session using "cart" as the key. Okay, now we have built the "Cart" class. Let us get back to our task of adding product to cart. Create controller file "app/Controller/CartsController.php" with code below: autoRender = false; if ($this->request->is('post')) { $this->Cart->addProduct($this->request->data['Cart']['product_id']); } echo $this->Cart->getCount(); } } As you can see, **public function addProduct()** is the action for adding product to cart. This function does not require a view, because we are going to call this functio via ajax. All it does is to return a count of total products in the cart. We turn off the view file by calling **$this->autoRender = false;**. And we use "Cart" class functions, which we built previously, to add product and get total products' count. The last thing we need to do in this step is to add some JavaScript codes to the view. Open file "app/View/Products/view.ctp", and following piece of JavaScript codes to the end of the file: <script>$(document).ready(function(){ $('#add-form').submit(function(e){ e.preventDefault(); var tis = $(this); $.post(tis.attr('action'),tis.serialize(),function(data){ $('#cart-counter').text(data); }); }); });</script> This piece of JavaScript codes simply calls action "carts/add" and set the counter text correctly. Now head back to your browser, and clicking "Add to cart" button in product detail page, it should dynamically set the counter on the top right corner correctly. ## Update shopping cart The final function we are going to implement is to update shopping cart items. However before that, we need to have a shopping cart page, which lists all current items in the cart. First let us add a controller's action to CartsController class. Open file "app/Controller/CartsController" and add function below after function "add()": public function view() { $carts = $this->Cart->readProduct(); $products = array(); if (null!=$carts) { foreach ($carts as $productId => $count) { $product = $this->Product->read(null,$productId); $product['Product']['count'] = $count; $products[]=$product; } } $this->set(compact('products')); } This function loops over items in the shopping cart and find their details. We need a view file for this action too. Create file "app/Carts/view.ctp" with code below:

<div class="row">

<div class="col-lg-12">1\. Html->link('Home','/');?> 2\. Cart</div>

</div>

Form->create('Cart',array('url'=>array('action'=>'update')));?>

<div class="row">

<div class="col-lg-12">

<table class="table">

<thead>

<tr>

<th>Product Name</th>

<th>Price</th>

<th>Quantity</th>

<th>Total</th>

</tr>

</thead>

<tbody>

<tr>

<td></td>

<td>$</td>

<td>

<div class="col-xs-3">Form->hidden('product_id.',array('value'=>$product['Product']['id']));?> Form->input('count.',array('type'=>'number', 'label'=>false, 'class'=>'form-control input-sm', 'value'=>$product['Product']['count']));?></div>

</td>

<td>$</td>

</tr>

<tr class="success">

<td colspan="3"></td>

<td>$</td>

</tr>

</tbody>

</table>

Form->submit('Update',array('class'=>'btn btn-warning','div'=>false));?> <a class="btn btn-success" onclick="alert('Implement a payment module for buyer to make a payment.');">CheckOut</a></div>

</div>

Form->end();?> This file looks big. But its main part is actually just the table. Rest is HTML structure for the design. Now if you navigate to the shopping cart view page by clicking the cart icon on the top right corner. You should see: ![img](https://www.startutorial.com/img/cakephp-shopping-cart-page.png) Here comes the last part, open file "app/Controller/CartsController.php" and add following function after function "view()" public function update() { if ($this->request->is('post')) { if (!empty($this->request->data)) { $cart = array(); foreach ($this->request->data['Cart']['count'] as $index=>$count) { if ($count>0) { $productId = $this->request->data['Cart']['product_id'][$index]; $cart[$productId] = $count; } } $this->Cart->saveProduct($cart); } } $this->redirect(array('action'=>'view')); } This function is triggered when you click "Update" button on shopping cart page. What it does is that, it loops over product count and add it to the Session. Please note if the product's count is less than 0, it is removed from Session, which means it is removed from shopping cart. ## Wrap it up It is almost done. There is only one thing we need to take care of here. If you recall. The top right corner counter is still a static value of 0\. We need to modify that piece to reflect the real time items' count. Open file "app/Controller/AppController.php" and add following function to it: public function beforeFilter() { $this->loadModel('Cart'); $this->set('count',$this->Cart->getCount()); } This function will set the real time items' count to all the view files, which includes layout file. Hence open layout file "app/View/Layouts/default.ctp" and change the static value 0 to $count. Html->link('<span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart <span class="badge" id="cart-counter">'.$count.'</span>', array('controller'=>'carts','action'=>'view'),array('escape'=>false));?> ## Download Now we should have a nice and fully working CakePHP powered shopping cart. You can download its full source code from link below: [Download](https://www.startutorial.com/downloads/cakephp-shopping-cart.zip) ## The end Hopefully this simple tutorial helped you with your development. If you like our post, please follow us on [Twitter](http://twitter.com/startutorial) and help spread the word. We need your support to continue. If you have questions or find our mistakes in above tutorial, do leave a comment below to let us know.</div>

</div>


www.startutorial.com

https://startutorial.com/view/build-a-shopping-cart-with-cakephp-and-jquery-part-1


https://startutorial.com/view/build-a-shopping-cart-with-cakephp-and-jquery-part-2


