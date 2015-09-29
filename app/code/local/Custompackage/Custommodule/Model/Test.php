<?php

namespace Custompackage\Custommodule\Model;

class Test 
{

	public function aftergetPrice(\Magento\Catalog\Model\Product $product)
    {	
        return 300;
    }

}