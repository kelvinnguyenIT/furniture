
                                                function deleteItemCartApp(idItem,idlocalItem){
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
                                                    var emptyCart="<li id='status-cart'>Không có sản phẩm nào trong giỏ hàng</li>";
                                                    $("#cart-sidebar").html(emptyCart);
                                                    $("#cart-total").text(0);
                                                }
                                                else{
                                                    alert("Có lỗi xảy ra");
                                                }
                                            }
                                        });
                                                                }
