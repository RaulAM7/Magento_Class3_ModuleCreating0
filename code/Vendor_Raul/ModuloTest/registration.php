<?php

// Este es el archivo que registra en Magento el Modulo
// Se ubica en app/code/Vendor/ModuleName -> la raiz del modulo

use Magento\Framework\Component\ComponentRegistrar; // Usa la clase ComponentRegistrar nativa de Magento

ComponentRegistrar::register(
    ComponentRegistrar::MODULE, // Indica que se estra registrando un modulo
     'Vendor_Raul_ModuloTest',  // Nombre del modulo y vendor al que pertenece
      __DIR__); // Ubicacion del modulo en el sistema de archivos