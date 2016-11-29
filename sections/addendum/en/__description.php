<h2 class="item5">Conclusion</h2>

<p>OpenCart is a multifunctional, quick and understandable solution for the users that would like to start online
    business. It is a great solution for your online store. The default engine package contains all modules necessary
    for successful sales. Open source allows you to offer really outstanding merchant possibilities for your
    customers.</p>

<h4>Useful resources:</h4>
<ul class="marked-list">
    <li>
        <a target="_blank" href="http://www.opencart.com/">The Official OpenCart website</a>
    </li>
    <li>
        <a target="_blank" href="http://forum.opencart.com/">OpenCart community forum</a>
    </li>
    <li>
        <a href="/help/ecommerce/opencart/opencart-tutorials/" target="_blank">OpenCart tutorials</a>
    </li>
</ul>

<h4>Can't load Google Fonts: </h4>
<ol class="index-list">
    <li>Open <strong>catalog\view\theme\themeXXX\stylesheet\stylesheet.css</strong> file. </li>

    <li><p>Locate the line: </p>
        <code>//fonts.googleapis.com/css?family=[---your_web_font_name---]</code>
    </li>
    <li><p>Replace it with the following: </p>
        <code>//fonts.useso.com/css?family=[---your_web_font_name---]</code>
    </li>
</ol>

<h4>Validation</h4>

<p class="alert alert-info">Both HTML markup and CSS styles used in our templates are semantically correct and valid.
    However some W3C errors can still take place. Making code 100% W3C valid eliminates the usage of modern website
    technologies as CSS3 features and HTML5 markup. Our goal is to deliver rich user experience with high quality
    templates and sometimes we have to break some rules.</p>

<h4>Translation of language files </h4>    
<p>After the installation of a new language package, check if the language files of English package were modified.
To do so go to the folder "the system\storage\modification\{admin,catalog}\language\en-gb" and check if there are the needed language files in the folder .
If the folder contains the files, you should replace them with the new language files and add the appropriate modifications for each of them.
All the language modifications exist inside .ocmod.xml files, in the folder with extensions (themeXXX-extensions).</p>