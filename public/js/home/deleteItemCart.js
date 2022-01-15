
                                        function deleteItemCart(idItem,idlocalItem){
                                            $.ajaxSetup({
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    }
                                    });
                                $.ajax({
                                    url: "/removecartitem",
                                    type: "post",
                                    data: {
                                    id: idItem
                                    },
                                })
                                .done(function() {
                                    console.log("success");
                                })
                                .fail(function() {
                                    console.log("error");
                                })
                                .always(function(response) {
                                    if(response=='1'){
                                        $(".item-cart-local"+idlocalItem).hide();

                                    }
                                    else{
                                        if(response=='0'){
                                            $(".item-cart-local"+idlocalItem).hide();
                                            var emptyCart="<div class='header-cart' style='background:#fff;'>";
                                                emptyCart+="<div class='title-cart'>";
                                                    emptyCart+="<p>Giỏ hàng của bạn chưa có sản phẩm nào nhấn vào <a href='/product/group/tat-ca' style='color: ;float:none;'>Cửa hàng</a> để mua hàng</p>";
                                                    emptyCart+="</div>";
                                                    emptyCart+="</div>";
                                                    emptyCart+="<div class='header-cart-content' style='background:#fff;'></div>";
                                                    $(".page_cart").html(emptyCart);
                                        }
                                        else{
                                            alert("Có lỗi xảy ra");
                                        }
                                    }
                                });
                                                        }