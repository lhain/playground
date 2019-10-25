<div id="blogpos">  
    <?php   // bindet in Joomla eine Modulposition unterhalb des Leading-Artikels ein
        $modules =& JModuleHelper::getModules('blogpos');
        foreach ($modules as $module){
        echo JModuleHelper::renderModule($module);
        }
    ?>
    <!-- Änderung -->
    
</div>
