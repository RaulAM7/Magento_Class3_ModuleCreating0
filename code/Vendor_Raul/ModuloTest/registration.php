<?php

// Este es el archivo que registra en Magento el Modulo

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE, // Indica que se estra registrando un modulo
     'Vendor_Raul_ModuloTest',  // 
      __DIR__)