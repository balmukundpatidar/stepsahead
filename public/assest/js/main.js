// $( document ).ready(function() {

//     base = '/admin/';

//

//

//     $('.post_featured_image .widget-controls .update-image').on('click', function(event){

//         event.preventDefault();

//         window.open('image-management/featured.php?update='+$(event.currentTarget).data('id')+'&updateImage=true', "", "");

//     });

//     $('.post_images_wrap ').on('click','.update-image.featured', function(event){

//         event.preventDefault();

//         window.open('../includes/post_use_image/index.php?featured='+$(event.currentTarget).data('id'), "", "");

//     });

//     $('.post_images_wrap ').on('click','.update-image.non-featured', function(event){

//         event.preventDefault();

//         window.open('../includes/post_use_image/index.php?update='+$(event.currentTarget).data('id'), "", "");

//     });

//

//

//

//

//     $('.team-section .widget-controls .update-image').on('click', function(event){

//         event.preventDefault();

//         window.open('image-management/index.php?update='+$(event.currentTarget).data('id')+'&updateImage=true', "", "width=1000,height=800");

//     });

//

//

//

//

//

//

//     // Adverts

//     $('.main-ads-section .widget-controls .close-content').on('click', function(event){

//         event.preventDefault();

//         if (confirm('Are you sure you want to delete this slide?')) {

//             window.open(base+'includes/actions.php?delete_ad='+$(event.currentTarget).data('id'),'_self');

//         }

//     });

//     $('.main-ads-section .widget-controls .update-content').on('click', function(event){

//         event.preventDefault();

//         window.open(base+'home-slider/index.php?update='+$(event.currentTarget).data('id'),'_self');

//     });

//

//

//

//     $('.ads-section .widget-controls .update-image').on('click', function(event){

//         event.preventDefault();

//         window.open('image-management/index.php?update='+$(event.currentTarget).data('id')+'&updateImage=true', "", "");

//     });

//

//

//

//     // Sub Categories

//     $('.subcategories-section .widget-controls .close-content').on('click', function(event){

//         event.preventDefault();

//         if (confirm('Are you sure you want to delete this category?')) {

//             window.open(base+'includes/actions.php?delete_subcategory='+$(event.currentTarget).data('id'),'_self');

//         }

//     });

//     $('.subcategories-section .widget-controls .update-content').on('click', function(event){

//         event.preventDefault();

//         window.open(base+'sub-categories/index.php?category='+$(event.currentTarget).data('category')+'&update='+$(event.currentTarget).data('id'),'_self');

//     });

//

//     // _________________________________________________________________ Router

//     // Users

//     /*$('.users-section .widget-controls .close-content').on('click', function(event){

//         event.preventDefault();

//         if (confirm('Are you sure you want to delete this user?')) {

//             window.open(base+'includes/actions.php?delete_user='+$(event.currentTarget).data('id'),'_self');

//         }

//     });

//     $('.users-section .widget-controls .update-content').on('click', function(event){

//         event.preventDefault();

//             window.open(base+'users/index.php?update='+$(event.currentTarget).data('id'),'_self');

//     });

//     $('.users-section .widget-controls .update-image').on('click', function(event){

//         event.preventDefault();

//             window.open('image-management/index.php?update='+$(event.currentTarget).data('id')+'&updateImage=true', "", "width=1000,height=800");

//     });

//     $('form[name="activate_user_form" ] input[type=radio]').on('change', function() {

//         $(this).closest("form").submit();

//     });

//     // Team

//     $('.team-section .widget-controls .close-content').on('click', function(event){

//         event.preventDefault();

//         if (confirm('Are you sure you want to delete this member?')) {

//             window.open(base+'includes/actions.php?delete_member='+$(event.currentTarget).data('id'),'_self');

//         }

//     });

//     $('.team-section .widget-controls .update-content').on('click', function(event){

//         event.preventDefault();

//             window.open(base+'team/index.php?update='+$(event.currentTarget).data('id'),'_self');

//     });

//     $('.team-section .widget-controls .update-image').on('click', function(event){

//         event.preventDefault();

//             window.open('image-management/index.php?update='+$(event.currentTarget).data('id')+'&updateImage=true', "", "width=1000,height=800");

//     });

//

//     // directory

//     $('.directory-section .widget-controls .close-content').on('click', function(event){

//         event.preventDefault();

//         if (confirm('Are you sure you want to delete this directory?')) {

//             window.open(base+'includes/actions.php?delete_directory='+$(event.currentTarget).data('id'),'_self');

//         }

//     });

//     $('.directory-section .widget-controls .update-content').on('click', function(event){

//         event.preventDefault();

//             window.open(base+'directory/index.php?update='+$(event.currentTarget).data('id'),'_self');

//     });

//     $('.directory-section .widget-controls .update-image').on('click', function(event){

//         event.preventDefault();

//             window.open('image-management/index.php?update='+$(event.currentTarget).data('id')+'&updateImage=true', "", "width=1000,height=800");

//     });

//

//     // whitepapers

//     $('.whitepapers-section .widget-controls .close-content:not(".delete_whitepaper_member")').on('click', function(event){

//         event.preventDefault();

//         if (confirm('Are you sure you want to delete this whitepaper?')) {

//             window.open(base+'includes/actions.php?delete_whitepaper='+$(event.currentTarget).data('id'),'_self');

//         }

//     });

//     $('.close-content.delete_whitepaper_member').on('click', function(event){

//         event.preventDefault();

//         if (confirm('Are you sure you want to delete this member?')) {

//             window.open(base+'includes/actions.php?delete_whitepaper_member='+$(event.currentTarget).data('id'),'_self');

//         }

//     });

//

//

//

//     $('.whitepapers-section .widget-controls .update-content').on('click', function(event){

//         event.preventDefault();

//             window.open(base+'whitepapers/index.php?update='+$(event.currentTarget).data('id'),'_self');

//     });

//

//

//

//

//     // Tags

//     $('.tags-section .widget-controls .close-content').on('click', function(event){

//         event.preventDefault();

//         if (confirm('Are you sure you want to delete this tag?')) {

//             window.open(base+'includes/actions.php?delete_tag='+$(event.currentTarget).data('id'),'_self');

//         }

//     });

//     $('.tags-section .widget-controls .update-content').on('click', function(event){

//         event.preventDefault();

//             window.open(base+'tags/index.php?update='+$(event.currentTarget).data('id'),'_self');

//     });

//

//     // Categories

//     $('.categories-section .widget-controls .close-content').on('click', function(event){

//         event.preventDefault();

//         if (confirm('Are you sure you want to delete this category?')) {

//             window.open(base+'includes/actions.php?delete_category='+$(event.currentTarget).data('id'),'_self');

//         }

//     });

//     $('.categories-section .widget-controls .update-content').on('click', function(event){

//         event.preventDefault();

//             window.open(base+'categories/index.php?update='+$(event.currentTarget).data('id'),'_self');

//     });

//

//     // Sub Categories

//     $('.subcategories-section .widget-controls .close-content').on('click', function(event){

//         event.preventDefault();

//         if (confirm('Are you sure you want to delete this category?')) {

//             window.open(base+'includes/actions.php?delete_subcategory='+$(event.currentTarget).data('id'),'_self');

//         }

//     });

//     $('.subcategories-section .widget-controls .update-content').on('click', function(event){

//         event.preventDefault();

//             window.open(base+'sub-categories/index.php?category='+$(event.currentTarget).data('category')+'&update='+$(event.currentTarget).data('id'),'_self');

//     });

//

//     // Adverts

//     $('.ads-section .widget-controls .close-content').on('click', function(event){

//         event.preventDefault();

//         if (confirm('Are you sure you want to delete this advert?')) {

//             window.open(base+'includes/actions.php?delete_ad='+$(event.currentTarget).data('id'),'_self');

//         }

//     });

//     $('.ads-section .widget-controls .update-content').on('click', function(event){

//         event.preventDefault();

//         window.open(base+'ads/index.php?update='+$(event.currentTarget).data('id'),'_self');

//     });

//

//     // Adverts

//     $('.main-ads-section .widget-controls .close-content').on('click', function(event){

//         event.preventDefault();

//         if (confirm('Are you sure you want to delete this advert?')) {

//             window.open(base+'includes/actions.php?delete_ad='+$(event.currentTarget).data('id'),'_self');

//         }

//     });

//     $('.main-ads-section .widget-controls .update-content').on('click', function(event){

//         event.preventDefault();

//         window.open(base+'main-ads/index.php?update='+$(event.currentTarget).data('id'),'_self');

//     });

//

//

//

//     $('.ads-section .widget-controls .update-image').on('click', function(event){

//         event.preventDefault();

//             window.open('image-management/index.php?update='+$(event.currentTarget).data('id')+'&updateImage=true', "", "");

//     });

//

//     // Posts

//     $('.delete_post_btn').on('click', function(event){

//         event.preventDefault();

//         if (confirm('Are you sure you want to delete this post?')) {

//             window.open(base+'includes/actions.php?delete_post='+$(event.currentTarget).data('id'),'_self');

//         }

//     });

//     $('.post_featured_image .widget-controls .update-image').on('click', function(event){

//         event.preventDefault();

//         window.open('image-management/featured.php?update='+$(event.currentTarget).data('id')+'&updateImage=true', "", "");

//     });

//     $('.post_images_wrap ').on('click','.update-image.featured', function(event){

//         event.preventDefault();

//         window.open('../includes/post_use_image/index.php?featured='+$(event.currentTarget).data('id'), "", "");

//     });

//     $('.post_images_wrap ').on('click','.update-image.non-featured', function(event){

//         event.preventDefault();

//         window.open('../includes/post_use_image/index.php?update='+$(event.currentTarget).data('id'), "", "");

//     });

//

//     $('body').on('click','.view_post_btn', function(event){

//         event.preventDefault();

//         $('.post-update-section').toggleClass('hidden');

//     });

//     $('.post_main_image .widget-controls .update-image').on('click', function(event){

//         event.preventDefault();

//         window.open('image-management/index.php?update='+$(event.currentTarget).data('id')+'&updateImage=true', "", "");

//     });*/

//     // _________________________________________________________________ Main settings

//     //_____Notification

//     setTimeout(function(){

//         $('.notification.message').fadeOut();

//     },6000);

//

//     $('.side-header').scrollToFixed({

//         marginTop: $('.top-bar').outerHeight(true),

//         limit: function() {

//             var limit = 0;

//             limit = $('footer ').offset().top - $(this).outerHeight(true) - 10;

//             return limit;

//         },

//         /*minWidth: 768,*/

//         zIndex: 999

//     });

//

//

//     //_____Date Picker

//     $('.datepicker').datetimepicker({

//         format : "YYYY-MM-DD HH:mm:SS"

//     });

//     $(".datepicker").on("dp.change", function (e) {

//     });

//     //_____SEO Link generator

     $('.auto_generate_link_from').trigger('change');

     $('.auto_generate_link_from').on('change keydown paste input', function(event) {

         var noti = false;

         var target = $(event.target);

         var text = $(this).val().toLowerCase();

         if (target.hasClass('max-title-noti')) {

             if(!noti && text.length > 88) {

                 //alert('Test ');

                 target.css({'background':'red'});

             } else {

                 target.css({'background':'transparent'});

             }

             noti = true;

         }

         var newText = filter_text(text);

         $('.auto_generate_link_to').val(newText);

     })

     function filter_text(text) {

         var text = text.toLowerCase();

         text = text.replace(/ /g,"-");

         //text = text.replace(/[_\W]+/g, "");

         var combining = /[\u0300-\u036F]/g;

         text = text.normalize('NFKD').replace(combining, '');

         text = text.replace(/[^-a-zA-Z\d\s]+/g, "");

         text = text.replace(/--/g,"-");



         //console.log(text);

         return text;

     }

//     /*******************************$('.auto_generate_link_to').on('change keydown paste input', function(event) {

// 	})**********/

//

//

//

//     //_____Sortable

//     $( ".sortable" ).sortable({

//         update: function(event, ui) {

//             result_string = $(this).sortable('toArray').toString();

//             console.log(result_string);

//

//         },

//         over: function(event, ui) {

//         }

//     });

//     $( ".sortable" ).disableSelection();

//     $("button.sort_btn").on("click", function(event){

//         event.preventDefault();

//         if (typeof result_string == 'undefined' || result_string == null) {

//         } else {

//             $(this).parent().find('#order').val(result_string);

//             $(this).parent().submit();

//         }

//     })

//     //_remove tag

//     $(document).on('click', '.tag_names p span', function(event){

//         event.preventDefault();

//         ids = $('.tag_id').val();

//         id = $(this).data('id');

//         var ids = ids.replace(id+",", "");

//         $('.tag_id').val(ids)

//         $(this).parent().remove();

//     });

//     // Post images

//

//

//     /*if($(".post_main_image").hasClass('empty')) {

//         $(".post-update-section button[name=update_post_btn]").prop("disabled", true);

//     }

//     if ($('input.featured_post_img').is(':checked')) {

//         $(".post_featured_image").show();

//         if($(".post_featured_image").hasClass('empty')) {

//             $(".post-update-section button[name=update_post_btn]").prop("disabled", true);

//         }

//     } else {

//         $(".post_featured_image").hide();

//     }*/

//

//     /*$("input.featured_post_img").change(function() {

//         if(this.checked) {

//             $(".post_featured_image").show();

//             if($(".post_featured_image").hasClass('empty')) {

//                 $(".post-update-section button[name=update_post_btn]").prop("disabled", true);

//             }

//         } else {

//             $(".post-update-section button[name=update_post_btn]").prop("disabled", false);

//             console.log("Changed to unchecked");

//             $(".post_featured_image").hide();

//         }

//     });*/

//

//

//     $('.publish_toggle').on('change', function(event){

//         event.preventDefault();

//         $(this).closest('form').submit();

//     })

//

//

//     $('select[name=filter_order_by_period]').on('change', function() {

//         var option = $(this).find('option:selected').val();

//         window.open(base+'orders/?period='+option,'_self');

//     });

//     $('select[name=filter_order_by_status]').on('change', function() {

//         var option = $(this).find('option:selected').val();

//         window.open(base+'orders/?status='+option,'_self');

//     });

//

//

//

// });

