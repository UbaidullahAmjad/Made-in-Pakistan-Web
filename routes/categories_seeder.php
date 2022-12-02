<?php

use App\Models\Item;
use App\Models\Category;
use App\Models\SubCategory;

Route::get('/seed', function () {

    $data = [
        'AGRICULTURE' => ['Fruits' => ['Apple', 'Orange', 'Banana', 'Cherry', 'Pakistani Mulberry'], 'Vegetables' => ['Potatoes', 'Onions', 'Lemon', 'Garlic'], 'Dairy Products' => ['Eggs', 'Milk', 'Butter', 'Cream', 'Cheese'], 'Grains & Cereal' => ['Wheats', 'Rice', 'Barley', 'Maize']],
        'MEAT/Poultry/Fishery' => ['Poultry' => ['Chicken', 'Goose', 'Duck'], 'Meat' => ['Cow', 'Sheep', 'Goat'], 'Fishery' => ['Simon', 'Mashka']],
        'FOOD/BEVERAGES' => ['Snacks /Confectionery items' => ['Biscuits', 'Wafers', 'Jellies'], 'Juices, Drinks & Beverages' => ['Energy Drinks', 'Milkshakes', 'Tea/Coffee'], 'Dry Fruits' => ['Almonds', 'Walnuts', 'Dates', 'Cocnuts'], 'Condiments' => ['Ketchups', 'Mayonesse'], 'Cereals & Pasta' => ['Custurds', 'Jelly powder', 'Puddings']],
        'SPICES/HERBS/OILs' => ['Spices' => ['Salts', 'Cloves', 'Ginger Powder'], 'Herbs' => ['Oregano', 'Aloe Vera', 'Fennel Seeds'], 'Oils' => 'Olive Oil', 'Cooking Oil', 'Hemp Oil'],
        'APPAREL & CLOTHING' => ['Men Apparel' => ['Dress Shirt', 'Polos', 'Jeans', 'Suits'], 'Women Apparel' => ['T-shirts', 'jeans', 'Tops', 'Unstitched'], 'Shoes' => ['Sneakers', 'Loafers', 'Slippers', 'Heels'], 'Caps and Hats' => ['Golf Hat', 'Flat hat'], 'Belts' => ['Belt', 'Casual', 'Skinny knot belt'], 'Jackets and Sweaters' => ['Bomber jackets', 'Biker jacket']],
        'CARPETS & CURTAINS' => ['Carpets' => ['Persian Carpets', 'Afghani'], 'Curtains' => ['leather', 'Net']],
        'INDUSTRIAL & INSTITUTIONAL TEXTILES' => ['Uniforms' => ['sport', 'hospital'], 'Gloves' => ['MMA', 'Bike'], 'Bags and Cases' => ['school', 'laptop']],
        
        'BEAUTY & COSMETICS' => ['Skincare' => ['Soap', 'Face wash', 'Masks'], 'Hair' => ['Oils', 'Dyes', 'Sparays'], 'Bath and Body' => ['Body wash', 'Bath bombs'], 'Hands and nails' => ['Nails paints', 'Manicure', 'Hand cream']],
        'ARTS & TRADITIONAL' => ['Handicraft' => ['Pottery', 'Basketry'], 'Wood craft' => ['Wooden toys', 'Jewllery'], 'Paper Craft' => ['Paper machine'], 'Glass craft' => ['Glass vase', 'Decoration pieces'], 'Paintings', 'Sculptures', 'Truck Art', 'Traditional' => ['sindhi ajrak', 'khaddar shawls'], 'Traditional Shoes' => ['Khussas', 'Kheri']],
        'HEALTH & MEDICINE' => ['Protective wear' => ['masks', 'Gloves', 'Clothings'], 'Disinfectants' => ['Hand senitizer', 'Paper products'], 'Equipments'],
        'OFFICE & SCHOOL SUPPLIES' => ['School Supplies' => ['Chairs', 'Desks', 'Pen'], 'Office Supplies' => ['Desk organizers', 'Notepads']],
        'CHEMICALS & FERTILIZERS' => ['Chemicals' => ['Caustic soda', 'Zinc'], 'Fertilizers' => ['Urea', 'Potash']],
        'ELECTRICAL & METAL UTILITIES' => ['Wires & Cables' => ['Razor wire', 'Armour wire'], 'Electric Wires' => ['Aluminium Cables', 'PVC cables'], 'Electric Utilities' => ['Bulbs', 'Switvhes', 'Fans']],
        'RUBBER, PLASTICS & GLASS' => ['Rubber Goods' => ['Tyers', 'Seals', 'Sheets'], 'Plastics' => ['Bottels', 'Bags'], 'Glass' => ['Mirror', 'Windows', 'Drinking Glass']],
        'HOME DECOR & FURNITURE' => ['Home bedding' => ['Bed sheets', 'Pillow pair', 'Euro sham pair'], 'Blankets' => ['Cotton', 'Wool', 'Down'], 'Comforters' => ['Cotton', 'Silk', 'Wools'], 'Quilts' => ['Patchers', 'Silk'], 'Furniture' => ['Sofa', 'Bed']],
        'CONSTRUCTION' => ['Paint' => ['Oil paints', 'Polish'], 'Tiles & Floor' => ['Ceramic Tiles', 'Marble Tile'], 'Pipes' => ['PPRC', 'PVC'], 'Geomembrane/Synthetic Leather' => ['HDPE', 'PVC', 'LDPE'], 'Tools & Hardware' => ['Measuring Instrument', 'Drilling'], 'Construction material' => ['Cements', 'Bricks', 'Marble']],
        'NATURAL MINERALS' => ['Coal', 'Copper']

    ];
    foreach ($data as $category => $categories) {
        // dd($categories);
        $id = Category::create(['name' => $category])->id;
        foreach ($categories as $key => $subCate) {
            // dd($subCategory);
            $sid = SubCategory::create(['category_id' => $id, 'name' => $key])->id;
            if (is_array($subCate) || is_object($subCate)) {
                foreach ($subCate as $keyitem => $subitem) {
                    // dd($subitem);
                    Item::create(['name' => $subitem, 'category_id' => $id, 'subcategory_id' => $sid]);
                }
            }
            else{
                Item::create(['name' => $subCate, 'category_id' => $id, 'subcategory_id' => $sid]);
            }
        }
    }
});
