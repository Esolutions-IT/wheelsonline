<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>IN ADMIN PANEL | Powered by INDEZINER</title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/css/admin.css')); ?>" />
    <script type="text/javascript" src="<?php echo e(asset('public/js/clockp.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/js/clockh.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/js/jquery.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/js/ddaccordion.js')); ?>"></script>
    <script type="text/javascript">
        ddaccordion.init({
            headerclass: "submenuheader", //Shared CSS class name of headers group
            contentclass: "submenu", //Shared CSS class name of contents group
            revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
            mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
            collapseprev: true, //Collapse previous content (so only one open at any time)? true/false
            defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
            onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
            animatedefault: false, //Should contents open by default be animated into view?
            persiststate: true, //persist state of opened contents within browser session?
            toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
            togglehtml: ["suffix", "<img src='<?php echo e(asset('public/images/plus.gif')); ?>' class='statusicon' />", "<img src='<?php echo e(asset('public/images/minus.gif')); ?>' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
            animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
            oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
                //do nothing
            },
            onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
                //do nothing
            }
        })
    </script>

    <script type="text/javascript" src="<?php echo e(asset('public/js/jconfirmaction.jquery.js')); ?>"></script>
    <script type="text/javascript">

        $(document).ready(function() {
            $('.ask').jConfirmAction();
        });

    </script>

    <script language="javascript" type="text/javascript" src="<?php echo e(asset('public/js/niceforms.js')); ?>"></script>
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo e(asset('public/css/niceforms-default.css')); ?>" />

</head>
<body>
<div id="main_container">

    <div class="header">
        <div class="logo"><a href="#"><img src="<?php echo e(asset('public/images/logo.gif')); ?>" alt="" title="" border="0" /></a></div>

        <div class="right_header">Welcome <?php echo e(auth()->user()->name); ?> (<?php echo e(auth()->user()->user_level); ?>), <a href="<?php echo e(route('landing')); ?>">Visit site</a>  | <a href="#" class="logout">Logout</a></div>
        <div id="clock_a"></div>
    </div>

    <div class="main_content">

        <div class="menu">
            <ul>
                <li><a class="current" href="#">Admin Home</a></li>
                <li><a href="<?php echo e(route('categorie')); ?>">Manage Categories<!--[if IE 7]><!--></a><!--<![endif]-->
                    <!--[if lte IE 6]><table><tr><td><![endif]-->
                    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                </li>
                <li><a href="<?php echo e(route('users')); ?>">Manage Users<!--[if IE 7]><!--></a><!--<![endif]-->
                    <!--[if lte IE 6]><table><tr><td><![endif]-->
                    <ul>
                        <li><a href="<?php echo e(route('users')); ?>" title="">Overzicht Users</a></li>
                        <li><a class="sub1" href="" title="">User Categories<!--[if IE 7]><!--></a><!--<![endif]-->
                            <!--[if lte IE 6]><table><tr><td><![endif]-->
                            <ul>
                                <li><a href="<?php echo e(route('admin_users')); ?>" title="">Admin</a></li>
                                <li><a href="<?php echo e(route('gebruiker_users')); ?>" title="">Gebruiker</a></li>
                            </ul>
                            <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                        </li>
                    </ul>
                    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                </li>
                <li><a href="login.html">Manage Orders<!--[if IE 7]><!--></a><!--<![endif]-->
                    <!--[if lte IE 6]><table><tr><td><![endif]-->
                    <ul>
                        <li><a href="" title="">Lorem ipsum dolor sit amet</a></li>
                        <li><a href="" title="">Lorem ipsum dolor sit amet</a></li>
                        <li><a href="" title="">Lorem ipsum dolor sit amet</a></li>
                        <li><a class="sub1" href="" title="">sublevel2<!--[if IE 7]><!--></a><!--<![endif]-->
                            <!--[if lte IE 6]><table><tr><td><![endif]-->
                            <ul>
                                <li><a href="" title="">sublevel link</a></li>
                                <li><a href="" title="">sulevel link</a></li>
                                <li><a class="sub2" href="#nogo">sublevel3<!--[if IE 7]><!--></a><!--<![endif]-->

                                    <!--[if lte IE 6]><table><tr><td><![endif]-->
                                    <ul>
                                        <li><a href="#nogo">Third level-1</a></li>
                                        <li><a href="#nogo">Third level-2</a></li>
                                        <li><a href="#nogo">Third level-3</a></li>
                                        <li><a href="#nogo">Third level-4</a></li>
                                    </ul>

                                    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                                </li>
                                <li><a href="" title="">sulevel link</a></li>
                            </ul>
                            <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                        </li>

                        <li><a href="" title="">Lorem ipsum dolor sit amet</a></li>
                    </ul>
                    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                </li>
                <li><a href="login.html">Settings<!--[if IE 7]><!--></a><!--<![endif]-->
                    <!--[if lte IE 6]><table><tr><td><![endif]-->
                    <ul>
                        <li><a href="" title="">Lorem ipsum dolor sit amet</a></li>
                        <li><a href="" title="">Lorem ipsum dolor sit amet</a></li>
                        <li><a href="" title="">Lorem ipsum dolor sit amet</a></li>
                        <li><a class="sub1" href="" title="">sublevel2<!--[if IE 7]><!--></a><!--<![endif]-->
                            <!--[if lte IE 6]><table><tr><td><![endif]-->
                            <ul>
                                <li><a href="" title="">sublevel link</a></li>
                                <li><a href="" title="">sulevel link</a></li>
                                <li><a class="sub2" href="#nogo">sublevel3<!--[if IE 7]><!--></a><!--<![endif]-->

                                    <!--[if lte IE 6]><table><tr><td><![endif]-->
                                    <ul>
                                        <li><a href="#nogo">Third level-1</a></li>
                                        <li><a href="#nogo">Third level-2</a></li>
                                        <li><a href="#nogo">Third level-3</a></li>
                                        <li><a href="#nogo">Third level-4</a></li>
                                    </ul>

                                    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                                </li>
                                <li><a href="" title="">sulevel link</a></li>
                            </ul>
                            <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                        </li>

                        <li><a href="" title="">Lorem ipsum dolor sit amet</a></li>
                    </ul>
                    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
                </li>
                <li><a href="">Custom details</a></li>
            </ul>
        </div>




        <div class="center_content">



            <div class="left_content">

                <div class="sidebar_search">
                    <form>
                        <input type="text" name="" class="search_input" value="search keyword" onclick="this.value=''" />
                        <input type="image" class="search_submit" src="<?php echo e(asset('public/images/search.png')); ?>" />
                    </form>
                </div>

                <div class="sidebarmenu">

                    <a class="menuitem submenuheader" href="">Velgen Producten</a>
                    <div class="submenu">
                        <ul>
                            <?php $__currentLoopData = $category_producten; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="./<?php echo e($category->category_id); ?>"><?php echo e($category->category_name); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <a class="menuitem submenuheader" href="" >Onderdelen</a>
                    <div class="submenu">
                        <ul>
                            <li><a href="">Sidebar submenu</a></li>
                            <li><a href="">Sidebar submenu</a></li>
                            <li><a href="">Sidebar submenu</a></li>
                            <li><a href="">Sidebar submenu</a></li>
                            <li><a href="">Sidebar submenu</a></li>
                        </ul>
                    </div>
                    <a class="menuitem submenuheader" href="">Reparaties</a>
                    <div class="submenu">
                        <ul>
                            <li><a href="">Sidebar submenu</a></li>
                            <li><a href="">Sidebar submenu</a></li>
                            <li><a href="">Sidebar submenu</a></li>
                            <li><a href="">Sidebar submenu</a></li>
                            <li><a href="">Sidebar submenu</a></li>
                        </ul>
                    </div>
                    <a class="menuitem" href="">User Reference</a>
                    <a class="menuitem" href="">Blue button</a>

                    <a class="menuitem_green" href="">Green button</a>

                    <a class="menuitem_red" href="">Red button</a>

                </div>


                <div class="sidebar_box">
                    <div class="sidebar_box_top"></div>
                    <div class="sidebar_box_content">
                        <h3>User help desk</h3>
                        <img src="<?php echo e(asset('public/images/info.png')); ?>" alt="" title="" class="sidebar_icon_right" />
                        <p>
                            Als u er niet uitkomt kunt u contact opnemen met Esolutions-IT.<br /> (tel: 0618425175)
                        </p>
                    </div>
                    <div class="sidebar_box_bottom"></div>
                </div>

                <div class="sidebar_box">
                    <div class="sidebar_box_top"></div>
                    <div class="sidebar_box_content">
                        <h4>Important notice</h4>
                        <img src="<?php echo e(asset('public/images/notice.png')); ?>" alt="" title="" class="sidebar_icon_right" />
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                    <div class="sidebar_box_bottom"></div>
                </div>

                <div class="sidebar_box">
                    <div class="sidebar_box_top"></div>
                    <div class="sidebar_box_content">
                        <h5>Download photos</h5>
                        <img src="<?php echo e(asset('public/images/photo.png')); ?>" alt="" title="" class="sidebar_icon_right" />
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                    <div class="sidebar_box_bottom"></div>
                </div>

                <div class="sidebar_box">
                    <div class="sidebar_box_top"></div>
                    <div class="sidebar_box_content">
                        <h3>To do List</h3>
                        <img src="<?php echo e(asset('public/images/info.png')); ?>" alt="" title="" class="sidebar_icon_right" />
                        <ul>
                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                            <li>Lorem ipsum dolor sit ametconsectetur <strong>adipisicing</strong> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                            <li>Lorem ipsum dolor sit amet, consectetur <a href="#">adipisicing</a> elit.</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        </ul>
                    </div>
                    <div class="sidebar_box_bottom"></div>
                </div>


            </div>

            <div class="right_content">

                <h2>Products Categories Settings</h2>

            <form action="<?php echo e(route('velgen_opslaan')); ?>" method='POST'>
                <?php echo e(csrf_field()); ?>

                <table id="rounded-corner" summary="2007 Major IT Companies' Profit">
                    <thead>
                    <tr>
                        <th scope="col" class="rounded-company"></th>
                        <th scope="col" class="rounded">Product</th>
                        <th scope="col" class="rounded">Aantal</th>
                        <th scope="col" class="rounded">Prijs</th>
                        <th scope="col" class="rounded">Datum</th>
                        <th scope="col" class="rounded">Edit</th>
                        <th scope="col" class="rounded-q4">Delete</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <td colspan="6" class="rounded-foot-left"><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</em></td>
                        <td class="rounded-foot-right">&nbsp;</td>

                    </tr>
                    </tfoot>
                    <tbody>
                    <?php $__currentLoopData = $producten_velgen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $velgen_producten): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><input type="checkbox" name="" /></td>
                        <td><?php echo e($velgen_producten->product_name); ?></td>
                        <td><?php echo e($velgen_producten->aantal); ?></td>
                        <td><?php echo e($velgen_producten->prijs); ?></td>
                        <td><?php echo e($velgen_producten->created_at); ?></td>

                        <td><a href="<?php echo e($velgen_producten->web_link); ?>"><img src="<?php echo e(asset('public/images/user_edit.png')); ?>" alt="" title="" border="0" /></a></td>
                        <td><a href="#" class="ask"><img src="<?php echo e(asset('public/images/trash.png')); ?>" alt="" title="" border="0" /></a></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <tr id="addnewproduct" style="visibility: hidden; position:absolute;">
                        <td><input type="checkbox" name="" /></td>
                        <td><input type="text" size="20" name="velgennaam" placeholder="Naam product"></td>
                        <td><input type="text" size="2" name="aantal_velgen" placeholder="Aantal"></td>
                        <td><input type="text" size="9" name="prijs_velgen" placeholder="Prijs in Euro's"></td>
                        <td></td>

                        <td><a href="#"><button type="submit" class="btn btn-link"><img src="<?php echo e(asset('public/images/valid.png')); ?>" alt="" title="" border="0" style="width:20px;"/></button></a></td>
                        <td><a href="#" onclick="deleteitem()"><img src="<?php echo e(asset('public/images/error.png')); ?>" alt="" title="" border="0" style="width:20px;"/></a></td>
                        <input type="hidden" value="<?php echo e($id); ?>" name="id">
                    </tr>



                    </tbody>
                </table>
            </form>
                <a href="#" class="bt_green" onclick="additem()"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
                <a href="#" class="bt_blue"><span class="bt_blue_lft"></span><strong>View all items from category</strong><span class="bt_blue_r"></span></a>
                <a href="#" class="bt_red"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a>

<script>
    function additem() {
        document.getElementById("addnewproduct").style.visibility = "visible";
        document.getElementById("addnewproduct").style.position = "relative";
    }
    function deleteitem() {
        document.getElementById("addnewproduct").style.visibility = "hidden";
        document.getElementById("addnewproduct").style.position = "absolute";
    }
</script>
                
                    
                

                <h2>Pop-up meldingen</h2>

                <div class="warning_box">
                    Dit komt in beeld als er een nieuwe update is.
                </div>
                <div class="valid_box">
                    Dit komt er in beeld als iets is toegevoegd.
                </div>
                <div class="error_box">
                    Dit komt er in beeld als er een error is.
                </div>

                

                
                    

                        
                            
                                
                                
                            
                            
                                
                                
                            


                            
                                
                                
                                    
                                        
                                        
                                        
                                        
                                        
                                    
                                
                            
                            
                                
                                
                                    
                                    
                                    
                                    
                                
                            

                            
                                
                                
                                    
                                    
                                    
                                
                            



                            
                                
                                
                            

                            
                                
                                
                            

                            
                                
                                
                                    
                                
                            

                            
                                
                            



                        

                    
                


            </div><!-- end of right content-->


        </div>   <!--end of center content -->




        <div class="clear"></div>
    </div> <!--end of main content-->


    <div class="footer">

        <div class="left_footer">IN ADMIN PANEL | Powered by <a href="http://indeziner.com">INDEZINER</a></div>
        <div class="right_footer"><a href="http://indeziner.com"><img src="<?php echo e(asset('public/images/indeziner_logo.gif')); ?>" alt="" title="" border="0" /></a></div>

    </div>

</div>
</body>
</html>