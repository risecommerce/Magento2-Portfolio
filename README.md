<h3><a target="_blank" href="https://risecommerce.com/">Risecore Technologies Pvt. Ltd.</a></h3>
<a target="_blank" href="https://risecommerce.com/"><img width="100%" height="208" src="https://risecommerce.com/media/wysiwyg/logowithtext.png"></a>

##Portfolio Extension

<a href="https://risecommerce.com/portfolio"><img width="190" height="70" src="https://risecommerce.com/media/wysiwyg/risedownload.png"></a>


Magento 2 Portfolio gallery with category filter have user-friendly interface to Showcase portfolio, images, video, gallery.

 <a target="_blank" href="https://demo.risecommerce.com/"> <img width="190" height="70" src="https://risecommerce.com/media/wysiwyg/frontend-demo.png"> </a>
 <a target="_blank" href="https://demo.risecommerce.com/admindemo"> <img width="190" height="70" src="https://risecommerce.com/media/wysiwyg/Backend-Demo.png"> </a>

Username: ```whatsapp_user``` Password: ```Test@123```

##Support: 
version - 2.3.*,2.4.*

##How to install Extension

<h4>Method I:</h4>
<p>1. Download the archive file.</p>
<p>2. Unzip the file</p>
<p>3. Create a folder [Magento_Root]/app/code/Risecommerce/Portfolio</p>
<p>4. Drop/move the unzipped files to directory '[Magento_Root]/app/code/Risecommerce/Portfolio'</p>

<h4>Method II:</h4>

Using Composer

```
 composer require risecommerce/portfolio
```

<h4>Enable Extension:</h4>

```
 php bin/magento module:enable Risecommerce_Portfolio
 php bin/magento setup:upgrade
 php bin/magento cache:clean
 php bin/magento setup:static-content:deploy
 php bin/magento cache:flush
```

<h4>Disable Extension:</h4>

```
 php bin/magento module:disable Risecommerce_Portfolio
 php bin/magento setup:upgrade
 php bin/magento cache:clean
 php bin/magento setup:static-content:deploy
 php bin/magento cache:flush
```

<h2>Configuration:</h2>
<p>After installing the Portfolio extension, you can configure it through the Magento admin panel. The configuration is divided into two main sections: Portfolio Categories and Portfolio Items.</p>

<h3>1. Portfolio Categories</h3>
<p>Portfolio Categories allow you to organize your portfolio items into different groups. This helps in managing and displaying the portfolio in a structured manner.</p>
<img width="830" height="430" src="https://risecommerce.com/media/wysiwyg/categories.png">
<h4>Steps to Configure Portfolio Categories:</h4>

```
Navigate to: Portfolio > Portfolio Categories.
```

<h3>Add a New Category:</h3>
<img width="830" height="430" src="https://risecommerce.com/media/wysiwyg/new-categories.png">
<p>Click the Add New Category button.</p>
<p>Enter the Category Name and other required details.</p>
<p>Click Save Category.</p>

<h3>Edit an Existing Category:</h3>
<img width="830" height="430" src="https://risecommerce.com/media/wysiwyg/edit-categories.png">
<p>Select a category from the list.</p>
<p>Make the necessary changes.</p>
<p>Click Save Category.</p>



<h3>2. Portfolio Items</h3>
<p>Portfolio Items represent the individual items within your portfolio. Each item can be associated with one or more categories.</p>
<img width="830" height="430" src="https://risecommerce.com/media/wysiwyg/items.png">
<h3>Steps to Configure Portfolio Items:</h3>
```
Navigate to:  Portfolio > Portfolio Items.
```

<h3>Add a New Portfolio Item:</h3>
<img width="830" height="430" src="https://risecommerce.com/media/wysiwyg/new-items.png">
<p>Click the Add New Item button.</p>
<p>Enter the Item Name, Content, and other required details.</p>
<p>Select the Categories to which this item belongs.</p>
<p>Upload the Base Image or other media.</p>
<p>Click Save Item.</p>

<h3>Edit an Existing Portfolio Item:</h3>
<img width="830" height="430" src="https://risecommerce.com/media/wysiwyg/edit-items.png">
<p>Select an item from the list.</p>
<p>Make the necessary changes.</p>
<p>Click Save Item.</p>

