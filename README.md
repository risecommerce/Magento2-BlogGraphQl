#Risecommerce BlogGraphQl Module

##Support: 
version - 2.3.x, 2.4.x

##How to install Extension

Method I)

1. Download the archive file.
2. Unzip the file
3. Create a folder [Magento_Root]/app/code/Risecommerce/BlogGraphQl
4. Drop/move the unzipped files to directory '[Magento_Root]/app/code/Risecommerce/BlogGraphQl'

Method II)

Using Composer

composer require risecommerce/module-blog-graph-ql:1.0.1

#Enable Extension:
- php bin/magento module:enable Risecommerce_BlogGraphQl
- php bin/magento setup:upgrade
- php bin/magento setup:di:compile
- php bin/magento setup:static-content:deploy
- php bin/magento cache:flush

#Disable Extension:
- php bin/magento module:disable Risecommerce_BlogGraphQl
- php bin/magento setup:upgrade
- php bin/magento setup:di:compile
- php bin/magento setup:static-content:deploy
- php bin/magento cache:flush
