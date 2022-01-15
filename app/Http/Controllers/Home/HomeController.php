<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Group;
use App\Models\Order;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Product;
use App\Models\ProductGroup;
use App\Models\Tag;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    private $title="";
    private $sort=0;

    public function getIdGroupName($condition)
    {
        $id_Group=Group::where('name',$condition)->get()->first()->id;
        return $id_Group;
    }

    public function getIdCategoryName($condition)
    {
        $id_Category=Category::where('name',$condition)->get()->first()->id;
        return $id_Category;
    }

    public function getIdGroupSlug($condition)
    {
        $id_Group=Group::where('slug',$condition)->get()->first()->id;
        return $id_Group;
    }

    public function getIdCategorySlug($condition)
    {
        $id_Category=Category::where('slug',$condition)->get()->first()->id;
        return $id_Category;
    }

    public function index()
    {
        $productList=Product::latest('created_at')->take(8)->get();
        $productOutStandingList=Product::inRandomOrder()->take(8)->latest()->get();

        $productGroupName1=Group::inRandomOrder()->take(1)->get()->first()->name;
        $productGroupList1=ProductGroup::where('group_id',$this->getIdGroupName($productGroupName1))->get();

        $productGroupName2=Group::inRandomOrder()->take(1)->get()->first()->name;
        $productGroupList2=ProductGroup::where('group_id',$this->getIdGroupName($productGroupName2))->get();

        $productCategoryName1=Category::inRandomOrder()->take(1)->get()->first()->name;
        $productCategoryList1=Product::where('category_id',$this->getIdCategoryName($productCategoryName1))->get();

        $productCategoryName2=Category::inRandomOrder()->take(1)->get()->first()->name;
        $productCategoryList2=Product::where('category_id',$this->getIdCategoryName($productCategoryName2))->get();

        $contactList=Contact::all();
        $groupList=Group::all();
        $postList=Post::take(6)->get();

        return view('home.index',
                compact('productList','productOutStandingList','productGroupList1','productGroupName1',
                        'productGroupName2','productCategoryName1','productCategoryName2',
                        'productGroupList2','productCategoryList1','productCategoryList2',
                        'contactList','postList','groupList'));
    }

    public function viewProductPage(Group $group)
    {
        $groupList=Group::all();
        $categoryList=Category::all();
        $brandList=Brand::all();

        $productGroupSlug=Group::inRandomOrder()->take(1)->get()->first()->slug_content;
        $productOSTList=ProductGroup::where('group_id',$this->getIdGroupSlug($productGroupSlug))->take(6)->get();

        $productList=ProductGroup::paginate(12);
        $title="Tất cả sản phẩm";

        if($group->id){
            $productList=ProductGroup::where('group_id',$group->id)->paginate(12);
            $title=$group->name;
        }

        return view('home.collections.product',compact('groupList','title','categoryList','productList','productOSTList','brandList'));
    }

    public static function sortAssociativeArrayByKey($array, $key, $direction){

        switch ($direction){
            case "ASC":
                usort($array, function ($first, $second) use ($key) {
                    return $first[$key] <=> $second[$key];
                });
                break;
            case "DESC":
                usort($array, function ($first, $second) use ($key) {
                    return $second[$key] <=> $first[$key];
                });
                break;
            default:
                break;
        }

        return $array;
        }

    public function viewProductCategory(Category $category,Request $request)
    {
        $groupList=Group::all();
        $categoryList=Category::all();
        $brandList=Brand::all();

        $productOSTList=ProductGroup::inRandomOrder()->take(6)->latest()->get();

        if($request->sortBy!=''){
            $product=Product::where('category_id',$category->id)->get();
            $sort=1;
            if($request->sortBy=='az'){
                $productList=$product->sortBy('name');
            }

            if($request->sortBy=='za'){
                $productList=$product->sortByDesc('name');
            }

            if($request->sortBy=='priceaz'){
                $productList=$product->sortBy('price');
            }

            if($request->sortBy=='priceza'){
                $productList=$product->sortByDesc('price');
            }
        }
        else{
            $productList=Product::where('category_id',$category->id)->paginate(12);
            $sort=0;
        }

        $title=$category->name;
        return view('home.collections.productCategory',compact('groupList','title','sort','categoryList','productList','productOSTList','brandList'));
    }

    public function viewProductBrand(Brand $brand,Request $request)
    {
        $groupList=Group::all();
        $categoryList=Category::all();
        $brandList=Brand::all();

        $productOSTList=ProductGroup::inRandomOrder()->take(6)->latest()->get();
        if($request->sortBy!=''){
            $product=Product::where('brand_id',$brand->id)->get();
            $sort=1;
            if($request->sortBy=='az'){
                $productList=$product->sortBy('name');
            }

            if($request->sortBy=='za'){
                $productList=$product->sortByDesc('name');
            }

            if($request->sortBy=='priceaz'){
                $productList=$product->sortBy('price');
            }

            if($request->sortBy=='priceza'){
                $productList=$product->sortByDesc('price');
            }

        }
        else{
            $productList=Product::where('brand_id',$brand->id)->paginate(12);
            $sort=0;
        }
        $title=$brand->name;
        return view('home.collections.productBrand',compact('groupList','title','sort','categoryList','productList','productOSTList','brandList'));
    }

    public function viewProductDetail(Product $product)
    {
        $title=$product->name;
        $groupList=Group::all();
        $productRelatedList=Product::where('category_id',$product->category_id)->latest('created_at')->get();
        return view('home.collections.productdetail',compact('product','title','groupList','productRelatedList'));
    }

    public function viewCart()
    {
        $groupList=Group::all();
        if(session('productCheckoutList') || session('productCheckoutTotalprice')){
            session()->forget('productCheckoutList');
            session()->forget('productCheckoutTotalprice');
        }
        return view('home.collections.cart',compact('groupList'));
    }

    public function viewBlogPage()
    {
        $tagList=Tag::all();
        $postList=Post::paginate(4);
        $groupList=Group::all();
        $title="Danh sách tin tức";
        return view('home.blogs.news',compact('tagList','groupList','title','postList'));
    }

    public function viewBlogPageTag(Tag $tag)
    {
        $tagList=Tag::all();
        $postList=Post::paginate(4);
        $groupList=Group::all();
        $postTagList=PostTag::where('tag_id',$tag->id)->get();
        $title=$tag->tag;
        return view('home.blogs.newsTag',compact('tagList','groupList','title','postList','postTagList'));
    }

    public function viewBlogDetail(Post $post)
    {
        $tagList=Tag::all();
        $groupList=Group::all();

        $id_tag=$post->postTag()->first()->id_tag;
        $postRelatedList=PostTag::where('tag_id',$id_tag)->take(4)->get();

        $postTagList=$post->postTag()->get();
        $title=$post->title;
        return view('home.blogs.news.news_detail',compact('post','groupList','tagList','title','postRelatedList','postTagList'));
    }

    public function viewAboutUs()
    {
        $groupList=Group::all();
        return view('home.pages.about_us',compact('groupList'));
    }

    public function viewContact()
    {
        $groupList=Group::all();
        return view('home.pages.contact',compact('groupList'));
    }

    public function processContact(Request $request)
    {
        Contact::create($request->all());
        return redirect()->route('home');
    }

    public function viewLogin()
    {
        $groupList=Group::all();
        return view('auth.login',compact('groupList'));
    }

    public function viewRegister()
    {
        $groupList=Group::all();
        return view('auth.register',compact('groupList'));
    }

    public function addCart(Request $request)
    {
        $product=Product::where('id',$request->id)->get()->first();
        if(session('productCartList')){
        foreach (session('productCartList') as $item) {
            if($product->id==$item->id){
            return response()->json(0);
            break;
            }
        }
    }

        $request->session()->push('productCartList', $product);
        return response()->json($product);
    }

    public function viewPayment(Request $request)
    {
        $productCheckoutList=$request->productCheckout['product'];
        $request->session()->push('productCheckoutList', $productCheckoutList);
        $request->session()->put('productCheckoutTotalprice', $request->productCheckout['totalprice']);
        return response()->json(1);
    }

    public function removeCartItem(Request $request)
    {
        $productCartList=session('productCartList');
        foreach($productCartList as $key => $productCart){
            if($productCart->id==$request->id){
                unset($productCartList[$key]);
                break;
            }
        }
        session()->put('productCartList',$productCartList);
        if(count(session('productCartList'))==0){

            return response()->json(0);
        }
        else{
            return response()->json(1);
        }

    }

    public function addCheckout(Request $request)
    {
        $code= Str::random(8)."-".Str::random(2);

        $productCheckoutList=session('productCheckoutList');
        for($i=0;$i<count($productCheckoutList);$i++){
        foreach($productCheckoutList[$i] as  $productCheckoutItem){

            $request['price_total']=session('productCheckoutTotalprice');
            $request['status']=0;
            $request['code']=$code;
            $request['count']=$productCheckoutItem['quantity'];
            $request['product_id']=$productCheckoutItem['product']['id'];
            Order::create($request->all());

        }
        }

        session()->forget('productCheckoutList');
        session()->forget('productCheckoutTotalprice');
        return redirect()->route('home');
    }

    public function searchProduct(Request $request)
    {
        $groupList=Group::all();
        $categoryList=Category::all();
        $brandList=Brand::all();

        $productOSTList=ProductGroup::inRandomOrder()->take(6)->latest()->get();

        if($request->slug=='tat-ca'){
            $productSearchList[]=Product::where('description','like','%'.$request->key.'%')->get();
        }
        else{
            $productGroupList=ProductGroup::where('group_id',$this->getIdGroupSlug($request->slug))->get();


            foreach($productGroupList as $key => $productGroup){
                $product=Product::where('id',$productGroup->id_product)->where('description','like','%'.$request->key.'%')->get();
                $productSearchList[]=$product;
            }

        }

        return view('home.collections.productSearch',compact('groupList','categoryList','productSearchList','productOSTList','brandList'));

    }

}
