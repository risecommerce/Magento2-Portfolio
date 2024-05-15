##Portfolio Extension

##Magento 2 Photo Gallery Extensions

Magento 2 Portfolio gallery with category filter have user-friendly interface to Showcase portfolio, images, video, gallery.

##Support: 
version - 2.3.*,2.4.*

##How to install Extension

Method I)
1. Download the archive file.
2. Unzip the file
3. Create a folder [Magento_Root]/app/code/Risecommerce/Portfolio
4. Drop/move the unzipped files to directory '[Magento_Root]/app/code/Risecommerce/Portfolio'

Method II)

Using Composer

  composer require risecommerce/portfolio
  
#Enable Extension:
- php bin/magento module:enable Risecommerce_Portfolio 
- php bin/magento setup:upgrade
- php bin/magento cache:clean
- php bin/magento setup:static-content:deploy
- php bin/magento cache:flush

#Disable Extension:
- php bin/magento module:disable Risecommerce_Portfolio 
- php bin/magento setup:upgrade
- php bin/magento cache:clean
- php bin/magento setup:static-content:deploy
- php bin/magento cache:flush