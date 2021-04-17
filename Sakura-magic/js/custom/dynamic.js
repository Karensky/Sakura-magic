(function ( $ ) {
		// 头像动画
	    var oldClass = "";
	    var Obj = "";
	    $(".cbp_tmtimeline li").hover(function () {
	        Obj = $(this).children(".shuoshuo_author_img");
	        Obj = Obj.children("img")[0];
	        Obj.classList.add("zhuan");
	    }, function () {
	        Obj.classList.remove("zhuan");
	    });
	    // 分页
	    $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
	    $('body').on('click', '#pagination_dynamic a', function () {
		    load_post_dynamic();
		    return false;
	    });
	    function load_post_dynamic() {
	        $('#pagination_dynamic a').addClass("loading").text("");
	        $.ajax({
	            type: "POST",
	            url: $('#pagination_dynamic a').attr("href") + "#main",
	            success: function (data) {
	                result = $(data).find("#dynamic_ul .dynamic_li");
	                nextHref = $(data).find("#pagination_dynamic a").attr("href");
	                $("#dynamic_ul").append(result.fadeIn(500));
	                $("#pagination_dynamic a").removeClass("loading").text("Previous");
	                lazyload();
	                post_list_show_animation();
	                if (nextHref != undefined) {
	                    $("#pagination_dynamic a").attr("href", nextHref);
	                    var tempScrollTop = $(window).scrollTop();
	                    $(window).scrollTop(tempScrollTop);
	                    $body.animate({
	                        scrollTop: tempScrollTop + 300
	                    }, 666)
	                } else {
	                    $("#pagination_dynamic").html("<span>很高兴你翻到这里，但是真的没有了...</span>");
	                }
	            }
	        });
	        return false;
	    }
    }
    )( jQuery )