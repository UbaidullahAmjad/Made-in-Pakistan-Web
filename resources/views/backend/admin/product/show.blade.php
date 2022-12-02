@extends('layout.app')
@section('title', 'Add Products')
@section('contents')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-controls">Add a New Product</h4>
                    <a class="heading-elements-toggle">
                        <i class="la la-ellipsis-v font-medium-3"></i>
                    </a>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                        <form class="form" action="{{ route('admin.product.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="form-group">
                                    <label for="complaintinput1">Category</label>
                                    <select name='category_id' class="form-control" id="maincategory">
                                        <option readonly selected disabled>Select a Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}</option>

                                        @endforeach

                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="complaintinput1">Sub Category</label>
                                    <select name='subcategory_id' class="form-control" id="subcategory">

                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="complaintinput1">Product Name</label>
                                    <input type="text" id="complaintinput1" class="form-control" placeholder="company name"
                                        name="name" value="{{ $product->name }}" readonly>
                                    `
                                </div>
                                <div class="form-group">
                                    <label for="complaintinput1">Description</label>
                                    <textarea name="description" class="ckeditor form-control"
                                        readonly>{{ $product->description }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="complaintinput6">Product Type</label>
                                    <select name="type" class="form-control" readonly>
                                        <option readonly selected disabled>Select a Product Type</option>
                                        <option value="durable"
                                            {{ $product->type == 'durable' ? 'selected=selected' : 'selected=' }}>Durable
                                        </option>
                                        <option value="consumer"
                                            {{ $product->type == 'consumer' ? 'selected=selected' : 'selected=' }}>Consumer
                                        </option>
                                        <option value="industrial"
                                            {{ $product->type == 'industrial' ? 'selected=selected' : 'selected=' }}>
                                            Industrial</option>


                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="BrandName">Model No.</label>
                                    <input type="text" id="BrandName" class="form-control"
                                        placeholder="Model number of product" name="model_no"
                                        value="{{ $product->model_no }}">

                                </div>
                                <div class="form-group">
                                    <label for="BrandName">Brand Name</label>
                                    <input type="text" id="BrandName" class="form-control"
                                        placeholder="Brand Name of Your Product" name="brand_name"
                                        value={{ $product->brand_name }}>

                                </div>
                                <div class="form-group">
                                    <label for="BrandName">Tags</label>
                                    <input type="text" id="BrandName" class="form-control"
                                        placeholder="Enter names of tags seperated by comma ','" name="tags"
                                        value={{ $product->tags }}>

                                </div>
                                <div class="form-group">
                                    <label for="complaintinput6">Size</label>
                                    <select name="size" class="form-control">
                                        <option readonly selected disabled>Select a Size</option>
                                        <option value="xs" {{ $product->size == 'xs' ? 'selected' : '' }}>XS</option>
                                        <option value="sm" {{ $product->size == 'sm' ? 'selected' : '' }}>SM</option>
                                        <option value="md" {{ $product->size == 'md' ? 'selected' : '' }}>MD</option>
                                        <option value="lg" {{ $product->size == 'lg' ? 'selected' : '' }}>LG</option>
                                        <option value="xl" {{ $product->size == 'xl' ? 'selected' : '' }}>XL</option>

                                    </select>

                                </div>
                                @php
                                $cities = [
                                "Abbottabad",
                                "Adezai",
                                "Ali Bandar",
                                "Amir Chah",
                                "Attock",
                                "Ayubia",
                                "Bahawalpur",
                                "Baden",
                                "Bagh",
                                "Bahawalnagar",
                                "Burewala",
                                "Banda Daud Shah",
                                "Bannu district|Bannu",
                                "Batagram",
                                "Bazdar",
                                "Bela",
                                "Bellpat",
                                "Bhag",
                                "Bhakkar",
                                "Bhalwal",
                                "Bhimber",
                                "Birote",
                                "Buner",
                                "Burj",
                                "Chiniot",
                                "Chachro",
                                "Chagai",
                                "Chah Sandan",
                                "Chailianwala",
                                "Chakdara",
                                "Chakku",
                                "Chakwal",
                                "Chaman",
                                "Charsadda",
                                "Chhatr",
                                "Chichawatni",
                                "Chitral",
                                "Dadu",
                                "Dera Ghazi Khan",
                                "Dera Ismail Khan",
                                "Dalbandin",
                                "Dargai",
                                "Darya Khan",
                                "Daska",
                                "Dera Bugti",
                                "Dhana Sar",
                                "Digri",
                                "Dina City|Dina",
                                "Dinga",
                                "Pakistan|Diplo",
                                "Diwana",
                                "Dokri",
                                "Drosh",
                                "Duki",
                                "Dushi",
                                "Duzab",
                                "Faisalabad",
                                "Fateh Jang",
                                "Ghotki",
                                "Gwadar",
                                "Gujranwala",
                                "Gujrat",
                                "Gadra",
                                "Gajar",
                                "Gandava",
                                "Garhi Khairo",
                                "Garruck",
                                "Ghakhar Mandi",
                                "Ghanian",
                                "Ghauspur",
                                "Ghazluna",
                                "Girdan",
                                "Gulistan",
                                "Gwash",
                                "Hyderabad",
                                "Hala",
                                "Haripur",
                                "Hab Chauki",
                                "Hafizabad",
                                "Hameedabad",
                                "Hangu",
                                "Harnai",
                                "Hasilpur",
                                "Haveli Lakha",
                                "Hinglaj",
                                "Hoshab",
                                "Islamabad",
                                "Islamkot",
                                "Ispikan",
                                "Jacobabad",
                                "Jamshoro",
                                "Jhang",
                                "Jhelum",
                                "Jamesabad",
                                "Jampur",
                                "Janghar",
                                "Jati(Mughalbhin)",
                                "Jauharabad",
                                "Jhal",
                                "Jhal Jhao",
                                "Jhatpat",
                                "Jhudo",
                                "Jiwani",
                                "Jungshahi",
                                "Karachi",
                                "Kotri",
                                "Kalam",
                                "Kalandi",
                                "Kalat",
                                "Kamalia",
                                "Kamararod",
                                "Kamber",
                                "Kamokey",
                                "Kanak",
                                "Kandi",
                                "Kandiaro",
                                "Kanpur",
                                "Kapip",
                                "Kappar",
                                "Karak City",
                                "Karodi",
                                "Kashmor",
                                "Kasur",
                                "Katuri",
                                "Keti Bandar",
                                "Khairpur",
                                "Khanaspur",
                                "Khanewal",
                                "Kharan",
                                "kharian",
                                "Khokhropur",
                                "Khora",
                                "Khushab",
                                "Khuzdar",
                                "Kikki",
                                "Klupro",
                                "Kohan",
                                "Kohat",
                                "Kohistan",
                                "Kohlu",
                                "Korak",
                                "Korangi",
                                "Kot Sarae",
                                "Kotli",
                                "Lahore",
                                "Larkana",
                                "Lahri",
                                "Lakki Marwat",
                                "Lasbela",
                                "Latamber",
                                "Layyah",
                                "Leiah",
                                "Liari",
                                "Lodhran",
                                "Loralai",
                                "Lower Dir",
                                "Shadan Lund",
                                "Multan",
                                "Mandi Bahauddin",
                                "Mansehra",
                                "Mian Chanu",
                                "Mirpur",
                                "Pakistan|Moro",
                                "Mardan",
                                "Mach",
                                "Madyan",
                                "Malakand",
                                "Mand",
                                "Manguchar",
                                "Mashki Chah",
                                "Maslti",
                                "Mastuj",
                                "Mastung",
                                "Mathi",
                                "Matiari",
                                "Mehar",
                                "Mekhtar",
                                "Merui",
                                "Mianwali",
                                "Mianez",
                                "Mirpur Batoro",
                                "Mirpur Khas",
                                "Mirpur Sakro",
                                "Mithi",
                                "Mongora",
                                "Murgha Kibzai",
                                "Muridke",
                                "Musa Khel Bazar",
                                "Muzaffar Garh",
                                "Muzaffarabad",
                                "Nawabshah",
                                "Nazimabad",
                                "Nowshera",
                                "Nagar Parkar",
                                "Nagha Kalat",
                                "Nal",
                                "Naokot",
                                "Nasirabad",
                                "Nauroz Kalat",
                                "Naushara",
                                "Nur Gamma",
                                "Nushki",
                                "Nuttal",
                                "Okara",
                                "Ormara",
                                "Peshawar",
                                "Panjgur",
                                "Pasni City",
                                "Paharpur",
                                "Palantuk",
                                "Pendoo",
                                "Piharak",
                                "Pirmahal",
                                "Pishin",
                                "Plandri",
                                "Pokran",
                                "Pounch",
                                "Quetta",
                                "Qambar",
                                "Qamruddin Karez",
                                "Qazi Ahmad",
                                "Qila Abdullah",
                                "Qila Ladgasht",
                                "Qila Safed",
                                "Qila Saifullah",
                                "Rawalpindi",
                                "Rabwah",
                                "Rahim Yar Khan",
                                "Rajan Pur",
                                "Rakhni",
                                "Ranipur",
                                "Ratodero",
                                "Rawalakot",
                                "Renala Khurd",
                                "Robat Thana",
                                "Rodkhan",
                                "Rohri",
                                "Sialkot",
                                "Sadiqabad",
                                "Safdar Abad- (Dhaban Singh)",
                                "Sahiwal",
                                "Saidu Sharif",
                                "Saindak",
                                "Sakrand",
                                "Sanjawi",
                                "Sargodha",
                                "Saruna",
                                "Shabaz Kalat",
                                "Shadadkhot",
                                "Shahbandar",
                                "Shahpur",
                                "Shahpur Chakar",
                                "Shakargarh",
                                "Shangla",
                                "Sharam Jogizai",
                                "Sheikhupura",
                                "Shikarpur",
                                "Shingar",
                                "Shorap",
                                "Sibi",
                                "Sohawa",
                                "Sonmiani",
                                "Sooianwala",
                                "Spezand",
                                "Spintangi",
                                "Sui",
                                "Sujawal",
                                "Sukkur",
                                "Suntsar",
                                "Surab",
                                "Swabi",
                                "Swat",
                                "Tando Adam",
                                "Tando Bago",
                                "Tangi",
                                "Tank City",
                                "Tar Ahamd Rind",
                                "Thalo",
                                "Thatta",
                                "Toba Tek Singh",
                                "Tordher",
                                "Tujal",
                                "Tump",
                                "Turbat",
                                "Umarao",
                                "Umarkot",
                                "Upper Dir",
                                "Uthal",
                                "Vehari",
                                "Veirwaro",
                                "Vitakri",
                                "Wadh",
                                "Wah Cantt",
                                "Warah",
                                "Washap",
                                "Wasjuk",
                                "Wazirabad",
                                "Yakmach",
                                "Zhob",
                                "Other"

                                ];
                                @endphp
                                <div class="form-group">
                                    <label for="complaintinput6">Place of Origin</label>
                                    <select name="placeoforigin" class="form-control">
                                        <option readonly selected disabled>Select Your City</option>
                                        @foreach ($cities as $city)
                                            <option value="{{ $city }}"
                                                {{ $product->placeoforigin == $city ? 'selected' : '' }}>{{ $city }}
                                            </option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <label>Shelf Life</label>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-4">
                                            <label for="complaintinput6">Days</label>
                                            <select name="shelf_life_days" class="form-control">
                                                <option readonly selected disabled>Select Days</option>
                                                @foreach (range(1, 31) as $item)
                                                    <option value="{{ $item }}"
                                                        {{ $product->shelf_life_days == $item ? 'selected' : '' }}>
                                                        {{ $item }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="complaintinput6">Weeks</label>
                                            <select name="shelf_life_weeks" class="form-control">
                                                <option readonly selected disabled>Select Weeks</option>
                                                @foreach (range(1, 52) as $item)
                                                    <option value="{{ $item }}"
                                                        {{ $product->shelf_life_weeks == $item ? 'selected' : '' }}>
                                                        {{ $item }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="complaintinput6">Months</label>
                                            <select name="shelf_life_months" class="form-control">
                                                <option readonly selected disabled>Select Months</option>
                                                @foreach (range(1, 12) as $item)
                                                    <option value="{{ $item }}"
                                                        {{ $product->shelf_life_months == $item ? 'selected' : '' }}>
                                                        {{ $item }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="complaintinput6">Color</label>
                                    @php
                                    $colors =
                                    ["AliceBlue","AntiqueWhite","Aqua","Aquamarine","Azure","Beige","Bisque","Black","BlanchedAlmond","Blue","BlueViolet","Brown","BurlyWood","CadetBlue","Chartreuse","Chocolate","Coral","CornflowerBlue","Cornsilk","Crimson","Cyan",
                                    "DarkBlue",
                                    "DarkCyan",
                                    "DarkGoldenRod",
                                    "DarkGray",
                                    "DarkGrey",
                                    "DarkGreen",
                                    "DarkKhaki",
                                    "DarkMagenta",
                                    "DarkOliveGreen",
                                    "DarkOrange",
                                    "DarkOrchid",
                                    "DarkRed",
                                    "DarkSalmon",
                                    "DarkSeaGreen",
                                    "DarkSlateBlue",
                                    "DarkSlateGray",
                                    "DarkSlateGrey",
                                    "DarkTurquoise",
                                    "DarkViolet",
                                    "DeepPink",
                                    "DeepSkyBlue",
                                    "DimGray",
                                    "DimGrey",
                                    "DodgerBlue",
                                    "FireBrick",
                                    "FloralWhite",
                                    "ForestGreen",
                                    "Fuchsia",
                                    "Gainsboro",
                                    "GhostWhite",
                                    "Gold",
                                    "GoldenRod",
                                    "Gray",
                                    "Grey",
                                    "Green",
                                    "GreenYellow",
                                    "HoneyDew",
                                    "HotPink",
                                    "IndianRed",
                                    "Indigo",
                                    "Ivory",
                                    "Khaki",
                                    "Lavender",
                                    "LavenderBlush",
                                    "LawnGreen",
                                    "LemonChiffon",
                                    "LightBlue",
                                    "LightCoral",
                                    "LightCyan",
                                    "LightGoldenRodYellow",
                                    "LightGray",
                                    "LightGrey",
                                    "LightGreen",
                                    "LightPink",
                                    "LightSalmon",
                                    "LightSeaGreen",
                                    "LightSkyBlue",
                                    "LightSlateGray",
                                    "LightSlateGrey",
                                    "LightSteelBlue",
                                    "LightYellow",
                                    "Lime",
                                    "LimeGreen",
                                    "Linen",
                                    "Magenta",
                                    "Maroon",
                                    "MediumAquaMarine",
                                    "MediumBlue",
                                    "MediumOrchid",
                                    "MediumPurple",
                                    "MediumSeaGreen",
                                    "MediumSlateBlue",
                                    "MediumSpringGreen",
                                    "MediumTurquoise",
                                    "MediumVioletRed",
                                    "MidnightBlue",
                                    "MintCream",
                                    "MistyRose",
                                    "Moccasin",
                                    "NavajoWhite",
                                    "Navy",
                                    "OldLace",
                                    "Olive",
                                    "OliveDrab",
                                    "Orange",
                                    "OrangeRed",
                                    "Orchid",
                                    "PaleGoldenRod",
                                    "PaleGreen",
                                    "PaleTurquoise",
                                    "PaleVioletRed",
                                    "PapayaWhip",
                                    "PeachPuff",
                                    "Peru",
                                    "Pink",
                                    "Plum",
                                    "PowderBlue",
                                    "Purple",
                                    "RebeccaPurple",
                                    "Red",
                                    "RosyBrown",
                                    "RoyalBlue",
                                    "SaddleBrown",
                                    "Salmon",
                                    "SandyBrown",
                                    "SeaGreen",
                                    "SeaShell",
                                    "Sienna",
                                    "Silver",
                                    "SkyBlue",
                                    "SlateBlue",
                                    "SlateGray",
                                    "SlateGrey",
                                    "Snow",
                                    "SpringGreen",
                                    "SteelBlue",
                                    "Tan",
                                    "Teal",
                                    "Thistle",
                                    "Tomato",
                                    "Turquoise",
                                    "Violet",
                                    "Wheat",
                                    "White",
                                    "WhiteSmoke",
                                    "Yellow",
                                    "YellowGreen"]
                                    @endphp
                                    <select class="form-control" name="color">
                                        <option readonly selected disabled>Select a Color</option>
                                        @foreach ($colors as $color)
                                            <option value="{{ $color }}" {{ $product->color == $color ? 'selected' : '' }}>
                                                {{ $color }}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="complaintinput6">Port</label>
                                    <input type="text" id="complaintinput6" class="form-control  " placeholder="signature"
                                        name="port" value={{ $product->port }}>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="complaintinput6">Weight</label>
                                                <input type="text" id="complaintinput6" class="form-control"
                                                    placeholder="weight" name="weight" value={{ $product->weight }}>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="complaintinput6">Unit</label>
                                                <select name="weight_unit" class="form-control">
                                                    <option readonly selected disabled>Select a Unit</option>
                                                    <option value="g" {{ $product->weight_unit == 'g' ? 'selected' : '' }}>
                                                        Gram</option>
                                                    <option value="kg"
                                                        {{ $product->weight_unit == 'kg' ? 'selected' : '' }}>Kilo Gram
                                                    </option>
                                                    <option value="tonne"
                                                        {{ $product->weight_unit == 'tonne' ? 'selected' : '' }}>Tonne
                                                    </option>
                                                    <option value="mt"
                                                        {{ $product->weight_unit == 'mt' ? 'selected' : '' }}>Mega Tonne
                                                    </option>
                                                    <option value="gt"
                                                        {{ $product->weight_unit == 'gt' ? 'selected' : '' }}>Giga Tonne
                                                    </option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="complaintinput6">Minimum Price Range</label>
                                                <input type="text" id="complaintinput6" class="form-control"
                                                    placeholder="Minimum Price Range" name="min_price"
                                                    value={{ $product->min_price }}>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="complaintinput6">Maximum Price Range</label>
                                                <input type="text" id="complaintinput6" class="form-control"
                                                    placeholder="Maximum Price Range" name="max_price"
                                                    value={{ $product->max_price }}>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="complaintinput6">Per</label>
                                                <select name="per_product" class="form-control">
                                                    <option readonly selected disabled>Select a Unit</option>
                                                    <option value="piece"
                                                        {{ $product->per_product == 'piece' ? 'selected' : '' }}>Piece
                                                    </option>
                                                    <option value="packet"
                                                        {{ $product->per_product == 'packet' ? 'selected' : '' }}>Packet
                                                    </option>
                                                    <option value="dozen"
                                                        {{ $product->per_product == 'dozen' ? 'selected' : '' }}>Dozen
                                                    </option>
                                                    <option value="g" {{ $product->per_product == 'g' ? 'selected' : '' }}>
                                                        Gram</option>
                                                    <option value="kg"
                                                        {{ $product->per_product == 'kg' ? 'selected' : '' }}>Kilo Gram
                                                    </option>
                                                    <option value="tonne"
                                                        {{ $product->per_product == 'tonne' ? 'selected' : '' }}>Tonne
                                                    </option>
                                                    <option value="mt"
                                                        {{ $product->per_product == 'mt' ? 'selected' : '' }}>Mega Tonne
                                                    </option>
                                                    <option value="gt"
                                                        {{ $product->per_product == 'gt' ? 'selected' : '' }}>Giga Tonne
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <label>Supply Time</label>
                                    </div>
                                    <div class="row">

                                        <div class="form-group col-lg-4">

                                            <label for="complaintinput6">Days</label>
                                            <select name="supply_days" class="form-control">
                                                <option readonly selected disabled>Select Days</option>
                                                @foreach (range(1, 31) as $item)
                                                    <option value="{{ $item }}"
                                                        {{ $product->supply_days == $item ? 'selected' : '' }}>{{ $item }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="complaintinput6">Weeks</label>
                                            <select name="supply_weeks" class="form-control">
                                                <option readonly selected disabled>Select Weeks</option>
                                                @foreach (range(1, 52) as $item)
                                                    <option value="{{ $item }}"
                                                        {{ $product->supply_weeks == $item ? 'selected' : '' }}>{{ $item }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="complaintinput6">Months</label>
                                            <select name="supply_months" class="form-control">
                                                <option readonly selected disabled>Select Months</option>
                                                @foreach (range(1, 12) as $item)
                                                    <option value="{{ $item }}"
                                                        {{ $product->supply_months == $item ? 'selected' : '' }}>{{ $item }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="SupplyAvailibility">Supply Availibility</label>
                                    <input type="text" id="SupplyAvailibility" class="form-control"
                                        placeholder="Supply Availibility" name="supply_availibility"
                                        value={{ $product->supply_availibility }}>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="SupplyAvailibility">Product Capacity</label>
                                                <input type="text" id="SupplyAvailibility" class="form-control"
                                                    placeholder="Number of production" name="product_capacity"
                                                    value={{ $product->product_capacity }}>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="complaintinput6">Per</label>
                                                <select name="capacity_per_item" class="form-control">
                                                    <option readonly selected disabled>Select a Unit</option>
                                                    <option value="piece"
                                                        {{ $product->capacity_per_item == 'piece' ? 'selected' : '' }}>Piece
                                                    </option>
                                                    <option value="packet"
                                                        {{ $product->capacity_per_item == 'packet' ? 'selected' : '' }}>
                                                        Packet</option>
                                                    <option value="dozen"
                                                        {{ $product->capacity_per_item == 'dozen' ? 'selected' : '' }}>Dozen
                                                    </option>
                                                    <option value="g"
                                                        {{ $product->capacity_per_item == 'g' ? 'selected' : '' }}>Gram
                                                    </option>
                                                    <option value="kg"
                                                        {{ $product->capacity_per_item == 'kg' ? 'selected' : '' }}>Kilo
                                                        Gram</option>
                                                    <option value="tonne"
                                                        {{ $product->capacity_per_item == 'tonne' ? 'selected' : '' }}>Tonne
                                                    </option>
                                                    <option value="mt"
                                                        {{ $product->capacity_per_item == 'mt' ? 'selected' : '' }}>Mega
                                                        Tonne</option>
                                                    <option value="gt"
                                                        {{ $product->capacity_per_item == 'gt' ? 'selected' : '' }}>Giga
                                                        Tonne</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="complaintinput6">Per</label>
                                                <select name="capacity_per_duration" class="form-control">
                                                    <option readonly selected disabled>Select a Unit</option>
                                                    <option value="day"
                                                        {{ $product->capacity_per_duration == 'day' ? 'selected' : '' }}>Day
                                                    </option>
                                                    <option value="week"
                                                        {{ $product->capacity_per_duration == 'week' ? 'selected' : '' }}>
                                                        Week</option>
                                                    <option value="month"
                                                        {{ $product->capacity_per_duration == 'month' ? 'selected' : '' }}>
                                                        Month</option>
                                                    <option value="year"
                                                        {{ $product->capacity_per_duration == 'year' ? 'selected' : '' }}>
                                                        Year</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="complaintinput6">Stock</label>
                                    <input type="text" id="complaintinput6" class="form-control" placeholder="Stock"
                                        name="qty" value="{{ $product->qty }}">
                                </div>
                                <div class="form-group">
                                    <label for="complaintinput6">Style</label>
                                    <input type="text" id="complaintinput6" class="form-control" placeholder="Product Style"
                                        name="style" value="{{ $product->style }}">
                                </div>
                                <div class="form-group">
                                    <label for="complaintinput6">Payment Terms</label>
                                    <input type="text" id="complaintinput6" class="form-control" placeholder="Payment Terms"
                                        name="payment_terms" value="{{ $product->payment_terms }}">
                                </div>

                                <div class="form-group">
                                    <label for="complaintinput6">Product Features</label>
                                    <textarea class="ckeditor form-control"
                                        name="features">{{ $product->features }}</textarea>

                                </div>

                                <div class="form-group">
                                    <label for="complaintinput6">Packaging Details</label>
                                    <textarea class="ckeditor form-control"
                                        name="packaging_details">{{ $product->packaging_details }}</textarea>

                                </div>


                                <div class="form-group">
                                    <label for="complaintinput6">Image</label>
                                    <input type="file" id="complaintinput6" class="form-control" name="image">
                                </div>
                                <div class="form-actions">
                                    <button type="button" name="submit" class="btn btn-primary btn-lg btn-block"
                                        onclick="window.history.back()">
                                        Go Back
                                    </button>

                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(function() {
            $('#maincategory').change(function() {
                var id = $(this).val();
                var subcategory = $('#subcategory');
                $.ajax({
                    url: "{{ route('superadmin.subcategory.show', 1) }}",
                    'method': 'get',
                    'data': {
                        index: id
                    },
                    success: function(data) {
                        subcategory.text('');
                        $.each(data, function(index, value) {
                            subcategory.append("<option value=" + value.id + ">" + value
                                .name + "</option>");
                        });

                    }
                });
            });

            var subcat = $('#maincategory').find(':selected').val();
            var subcategory2 = $('#subcategory');
            $.ajax({
                url: "{{ route('superadmin.subcategory.show', 1) }}",
                'method': 'get',
                'data': {
                    index: subcat
                },
                success: function(data) {
                    subcategory2.text('');
                    $.each(data, function(index, value) {
                        subcategory2.append("<option value=" + value.id + ">" + value.name +
                            "</option>");
                    });

                }
            });
        });

    </script>
    <script>
        $('.ckeditor').ckeditor(); <
        /scritp>
    @endsection
