

                                                var cartApp=[];
                                                var cartPage=[];
                                                var quanPage,quanApp;
                                                class Cart{
                                                            constructor(quantity,totalprice,product){
                                                                this.quantity=quantity;
                                                                this.totalprice=totalprice;
                                                                this.product=product;
                                                            }
                                                        }
                                                        function adjustCartApp(id,item){
                                                            var priceitemApp="";
                                                            var sumitemApp=$(".total_priceapp").val();
                                                            priceitemApp = $(".priceapp"+id).text();
                                                            priceitemApp=priceitemApp.substr(0,priceitemApp.length-1);
                                                            priceitemApp=priceitemApp.replace(/[.,\/#!$%\^&\*;:{}=\-_`~()]/g,"");
                                                            sumitemApp=parseInt(sumitemApp)+parseInt(priceitemApp);
                                                            $(".total_priceapp").val(sumitemApp);

                                                            quanApp=$(".quantity"+id).val();
                                                            var priceApp=$(".priceapp"+id).text();
                                                            var itemApp=item;
                                                            cartApp.push(new Cart(quanApp,priceApp,itemApp));


                                                }
                                                function adjustCartPage(id,item){
                                                    var priceitemPage="";
                                                    var sumitemPage=$(".total_price").val();
                                                    priceitemPage = $(".priceitem"+id).text();
                                                    priceitemPage=priceitemPage.substr(0,priceitemPage.length-1);
                                                    priceitemPage=priceitemPage.replace(/[.,\/#!$%\^&\*;:{}=\-_`~()]/g,"");
                                                    sumitemPage=parseInt(sumitemPage)+parseInt(priceitemPage);
                                                    $(".total_price").val(sumitemPage);

                                                    quanPage=$(".quantity"+id).val();
                                                    var pricePage=$(".priceitem"+id).text();
                                                    var itemPage=item;
                                                    cartPage.push(new Cart(quanPage,pricePage,itemPage));
                                                }
                                                var total=parseInt($(".total_price").val());
                                                total = total.toLocaleString('vi', {style : 'currency', currency : 'VND'});
                                                $(".totals_price").text(total);
                                                function plusCount(id,line){
                                                    var priceplus=$(".priceitem"+id).text();
                                                var quantity=parseInt($(".quantity"+id).val());
                                                quantity=quantity+1;
                                                $(".quantity"+id).val(quantity);

                                                var totalItem=$("#totalpriceItem"+id).val();
                                                totalItem=totalItem.substr(0,totalItem.length-1);
                                                totalItem=totalItem.replace(/[.,\/#!$%\^&\*;:{}=\-_`~()]/g,"");

                                                var totalPrice=parseInt($(".total_price").val());
                                                totalPrice=totalPrice+parseInt(totalItem);
                                                $(".total_price").val(totalPrice);

                                                totalItem=parseInt(totalItem)*quantity;
                                                totalItem = totalItem.toLocaleString('vi', {style : 'currency', currency : 'VND'});
                                                $(".priceitem"+id).text(totalItem);

                                                totalPrice = totalPrice.toLocaleString('vi', {style : 'currency', currency : 'VND'});
                                                $(".totals_price").text(totalPrice);

                                                cartPage[line]['quantity']=quantity;
                                                cartPage[line]['totalprice']=totalItem;


                        }
                    function minusCount(id,line){
                                                var quantity=parseInt($(".quantity"+id).val());
                                                if(quantity>1){
                                                quantity=quantity-1;
                                                $(".quantity"+id).val(quantity);

                                                var totalItem=$("#totalpriceItem"+id).val();
                                                totalItem=totalItem.substr(0,totalItem.length-1);
                                                totalItem=totalItem.replace(/[.,\/#!$%\^&\*;:{}=\-_`~()]/g,"");


                                                var totalPrice=parseInt($(".total_price").val());
                                                totalPrice=totalPrice-parseInt(totalItem);
                                                $(".total_price").val(totalPrice);

                                                totalItem=parseInt(totalItem)*quantity;

                                                totalItem = totalItem.toLocaleString('vi', {style : 'currency', currency : 'VND'});
                                                $(".priceitem"+id).text(totalItem);

                                                totalPrice = totalPrice.toLocaleString('vi', {style : 'currency', currency : 'VND'});
                                                $(".totals_price").text(totalPrice);

                                                cartPage[line]['quantity']=quantity;
                                                cartPage[line]['totalprice']=totalItem;
                                                }


                        }

                        function sendproduct(){
                                                        var pricetotal=$(".totals_price").text();
                                                    productCheckout=new Cart(quanPage,pricetotal,cartPage);
                                                    $.ajaxSetup({
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    }
                                    });

                                    $.ajax({
                                        url: "/payment",
                                        type: "post",
                                        data: {
                                        productCheckout: productCheckout
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
                                            window.location="/checkout";
                                        }
                                        else{
                                            alert("Lỗi");
                                        }
                                    });
                                    }
                                    function sumPricePage(){
                                    var total=parseInt($(".total_price").val());
                                    total = total.toLocaleString('vi', {style : 'currency', currency : 'VND'});
                                    $(".totals_price").text(total);
                                    }
                            function plusCountApp(id,line){
                                                        var priceplus=$(".priceapp"+id).text();
                                                    var quantity=parseInt($(".quantity"+id).val());
                                                    quantity=quantity+1;
                                                    $(".quantity"+id).val(quantity);

                                                    var totalItem=$("#totalpriceItemApp"+id).val();
                                                    totalItem=totalItem.substr(0,totalItem.length-1);
                                                    totalItem=totalItem.replace(/[.,\/#!$%\^&\*;:{}=\-_`~()]/g,"");

                                                    var totalPrice=parseInt($(".total_priceapp").val());
                                                    totalPrice=totalPrice+parseInt(totalItem);
                                                    $(".total_priceapp").val(totalPrice);

                                                    totalItem=parseInt(totalItem)*quantity;
                                                    totalItem = totalItem.toLocaleString('vi', {style : 'currency', currency : 'VND'});
                                                    $(".priceapp"+id).text(totalItem);

                                                    totalPrice = totalPrice.toLocaleString('vi', {style : 'currency', currency : 'VND'});
                                                    $(".totals_priceapp").text(totalPrice);

                                                    cartApp[line]['quantity']=quantity;
                                                    cartApp[line]['totalprice']=totalItem;


                            }
                        function minusCountApp(id,line){
                                                    var quantity=parseInt($(".quantity"+id).val());
                                                    if(quantity>1){
                                                    quantity=quantity-1;
                                                    $(".quantity"+id).val(quantity);

                                                    var totalItem=$("#totalpriceItemApp"+id).val();
                                                    totalItem=totalItem.substr(0,totalItem.length-1);
                                                    totalItem=totalItem.replace(/[.,\/#!$%\^&\*;:{}=\-_`~()]/g,"");


                                                    var totalPrice=parseInt($(".total_priceapp").val());
                                                    totalPrice=totalPrice-parseInt(totalItem);
                                                    $(".total_priceapp").val(totalPrice);

                                                    totalItem=parseInt(totalItem)*quantity;

                                                    totalItem = totalItem.toLocaleString('vi', {style : 'currency', currency : 'VND'});
                                                    $(".priceapp"+id).text(totalItem);

                                                    totalPrice = totalPrice.toLocaleString('vi', {style : 'currency', currency : 'VND'});
                                                    $(".totals_priceapp").text(totalPrice);

                                                    cartApp[line]['quantity']=quantity;
                                                    cartApp[line]['totalprice']=totalItem;
                                                    }


                            }
                            function sumPriceApp(){
                                var total=parseInt($(".total_priceapp").val());
                                total = total.toLocaleString('vi', {style : 'currency', currency : 'VND'});
                                $(".totals_priceapp").text(total);
                                }
                            function sendproductApp(){
                                                            var pricetotal=$(".totals_priceapp").text();
                                                        productCheckout=new Cart(quanApp,pricetotal,cartApp);
                                                        $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                        });

                                        $.ajax({
                                            url: "/payment",
                                            type: "post",
                                            data: {
                                            productCheckout: productCheckout
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
                                                window.location="/checkout";
                                            }
                                            else{
                                                alert("Lỗi");
                                            }
                                        });
                                        }
