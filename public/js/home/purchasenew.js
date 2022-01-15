function senDataAjax(idProduct){
                var productCart="";
                var count=0;
                $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
                $.ajax({
                    url: "/addtocart",
                    type: "post",
                    data: {
                      id: idProduct
                    },
                  })
                  .done(function() {
                    console.log("success");
                  })
                  .fail(function() {
                    console.log("error");
                  })
                  .always(function(response) {
                      if(response=='0'){
                          alert("Đã có trong giỏ hàng!!!");
                      }
                      else{
                          var price=response['price'];
                          price = price.toLocaleString('vi', {style : 'currency', currency : 'VND'});
                        productCart="<li class='item productid-1033205998'>";
                            productCart+="<div class='border_list'>";
                                productCart+="<a class='product-image' href='"+response['slug']+"' title='"+response['name']+"'>";
                                    productCart+="<img alt='"+response['name']+"' src='"+response['image']+"' width='100'>";
                                    productCart+="</a>";
                                    productCart+="<div class='detail-item'>";
                                        productCart+="<div class='product-details'>";
                                            productCart+="<p class='product-name'>";
                                                productCart+="<a href='"+response['slug']+"' title='"+response['name']+"'>"+response['name']+"</a>";
                                                productCart+="</p>";
                                                productCart+="</div>";
                                                productCart+="<div class='product-details-bottom'>";
                                                    productCart+="<span class='price'>"+price+"</span>";
                                                    productCart+="<a href='javascript:;' data-id='1033205998' title='Xóa' class='remove-item-cart fa fa-remove'>&nbsp;</a>";
                                                    productCart+="<div class='quantity-select qty_drop_cart'>";
                                                        productCart+="<button class='btn_reduced reduced items-count btn-minus' disabled='' type='button'>–</button>";
                                                        productCart+="<input type='text' maxlength='12' min='0' class='input-text number-sidebar qty1033205998' data-id='qty1033205998' name='Lines' size='4' value='1' onchange='if(this.value == 0)this.value=1;' onkeypress='if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;'>";
                                                        productCart+="<button class='btn_increase increase items-count btn-plus' type='button'>+</button>";
                                                        productCart+="</div>";
                                                        productCart+="</div>";
                                                        productCart+="</div>";
                                                        productCart+="</div>";
                                                        productCart+="</li>";
                                $("#status-cart").text("");
                                count=$("#cart-total").text();
                                count=parseInt(count)+1;
                                $("#cart-total").text(count);
                                $(".list-item-cart").append(productCart);
                                alert("Đã thêm vào giỏ hàng");
                      }
                  });
        }
