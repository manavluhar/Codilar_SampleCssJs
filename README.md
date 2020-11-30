## JavaScript in Magento

### **Adding Javascript in custom module**
#### Method 1:
declare **data-mage-init** in template file where we are going to use javascript
```
<div data-mage-init='{"example": {}}'></div>
```

Now declare module name(example) in requirejs configuration file, which can be used anywhere as a RequireJS module name.
**web/requirejs-config.js**
```
var config = {  
    map: {  
        '*': {  
            example: 'Codilar_SampleCssJs/js/example',  
        }  
    }  
};
```
Defined *example.js* is as:

```
require( [  
        'jquery'  
  ],  
    function($) {  
        alert('Example');  
    }  
);
```
#### Method 2:
declare source of javascript in layout xml
```
<head>  
    <script src="Codilar_SampleCssJs::js/customjs.js"/>  
</head>
```
write script inside web/js/ to use it:
*web/js/customjs.js*
```
require([  
    "jquery"  
], function($){  
    $(document).ready(function() {  
        console.log('All right Sparky!!');  
    });  
});
```
## CSS in Magento
### **Adding CSS in custom module**
#### Method 1:
create **web/css/source/*_module.less***
```
@import "css_example";
```
defined *css_example.less* is as:
**exampleCss** is a class of div which is defined inside template file
```
.exampleCss{  
    background-color: #efefef; color: #1979c3  
}
```
#### Method 2:
declare source of css in layout xml
```
<head>  
    <css src="Codilar_SampleCssJs::css/customcss.css" />  
</head>
```
write css inside web/css/ to use it:
*web/css/customcss.css*
```
.customcss{  
    background: brown;  
}
```
 Run the following command
```
bin/magento se:st:de -f
```
