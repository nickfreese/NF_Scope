# NF_Scope

This module adds a single ViewModel class that contains a public method for retreiving scope configuration values.  The main use case is to ensure frontend devs can utilize feature toggling in their code without creating new classes.


## Example usage

in your layout.xml

```
<referenceBlock name="page.main.title">
    <arguments>
        <argument name="nf_scope_view_model" xsi:type="object">NF\Scope\ViewModel\Scope</argument>
    </arguments>
</referenceBlock>

```


In the phtml file for the block:
```
$scopeConfiguration = $block->getData('nf_scope_view_model');

$defaultTitle = $scopeConfiguration->getConfig('design/head/default_title');

echo "Test NF Scope: " . $defaultTitle; 
```