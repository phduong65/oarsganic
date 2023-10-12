<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('products')->insert([
            'name' => 'Chanh tươi',
            'description' => 'Với tính năng đa tác dụng và hiệu quả vượt trội trong cuộc sống hàng ngày, chanh tươi từ lâu đã trở thành thực phẩm quen thuộc trong tủ lạnh nhiều gia đình. Bên cạnh khả năng góp phần giúp chị em làm đẹp, phát huy công dụng trong nhà bếp, vệ sinh nhà cửa, chanh tươi còn có rất nhiều lợi ích đối với sức khỏe mà không phải ai cũng biết.

            Các chuyên gia dinh dưỡng khuyên rằng mỗi ngày bạn hãy uống 1 ly nước chanh tươi ấm pha với mật ong để không ngừng nâng cao sức đề kháng, tăng cường hệ thống miễn dịch và bảo vệ sức khỏe vì trong chanh tươi có chứa rất nhiều kali giúp kích thích hoạt động bộ não, đảm bảo hoạt động của hệ thần kinh, huyết áp ổn định, tăng cường chức năng tiêu hóa, phát huy khả năng thanh',
            'price' => 5000,
            'photo' => 'chanh1.png',
            'status'=> 'Còn Hàng',
            'quality' => 10,
        ]);
        DB::table('category_product')->insert([
            'product_id'=>1,
            'category_id'=>1,
        ]);
        DB::table('products')->insert([
            'name' => 'Cà chua hữu cơ',
            'description' => 'Tại sao cà chua thường được lựa chọn để chế biến trong các thực đơn hàng ngày?
             Bởi các vitamin trong cà chua không bị mất đi trong quá trình nấu chín. Theo phân tích,
              trong 100g cà chua có 2,2mg đường, 8mg canxi, 3,7mg kali, 0,4mg sắt, 0,3mg carotene, 0,6mg nitơ, vitamin A, B1, B2, C, P và các axit hữu cơ. Bài viết nay xin phân
               tích một số thành phần tiêu biểu của cà chua chín mang lại giá trị sức khỏe cho con người chúng ta.',
            'price' => 5000,
            'photo' => 'ca-chua-1.jpeg',
            'status'=> 'Còn Hàng',
            'quality' => 10,
        ]);
        DB::table('category_product')->insert([
            'product_id'=>2,
            'category_id'=>1,
        ]);
        DB::table('products')->insert([
            'name' => 'Đào đỏ Mỹ',
            'description' => 'Giá trị dinh dưỡng:  Đào là nguồn cung cấp Vitamin C giá trị, và thích hợp cho việc giảm cân
 
            Chất ngọt trong quả  mận là đường tự nhiên rất tốt cho cơ thể và người bị đái tháo đường. Nước ép quả mận có tác dụng mát, thanh nhiệt, giải nóng, nhuận tràng, dùng làm nước giải khát mùa hè rất tốt.
             
            Cách chọn Đào: Chọn quả có vỏ màu đỏ thẫm, da trơn và chắc, những quả lớn, không quá cứng hoặc quả mềm là vừa chín tới
             
            Lưu ý Quý khách hàng: để giữ quả đào tươi ngon lâu hơn, hãy bảo quản đào trong nhiệt độ khoảng 4 độ C',
            'price' =>31000,
            'photo' => 'dao-do-my.jpg',
            'status'=> 'Còn Hàng',
            'quality' => 10,
        ]);
        DB::table('category_product')->insert([
            'product_id'=>3,
            'category_id'=>1,
        ]);
        DB::table('products')->insert([
            'name' => 'Dâu tây Đà Lạt',
            'description' => 'Dâu tây nói chung và dâu tây Đà Lạt nói riêng, từ lâu được biết tới là một loại trái cây rất tốt cho con người. Tạp chí Các nhân tố sinh học của Hà Lan đăng kết quả nghiên cứu cho thấy quả dâu tây là một thứ quả đặc biệt có lợi cho sức khỏe con người. Loại quả này chứa nhiều chất bổ hơn cả cà chua (dâu tây chứa chất chống oxy hóa nhiều gấp 10 lần cà chua), quả kiwi, hay hoa lơ xanh, những loại thực phẩm nổi tiếng có giá trị dinh dưỡng cao, được nhiều người ưa dùng. Nhưng giá trị lớn nhất của quả dâu tây mà các nhà khoa học ghi nhận được đó là tác dụng chữa bệnh.',
            'price' => 35000,
            'photo' => 'dau-da-lat1.jpg',
            'status'=> 'Còn Hàng',
            'quality' => 10,
        ]);
        DB::table('category_product')->insert([
            'product_id'=>4,
            'category_id'=>1,
        ]);
        DB::table('products')->insert([
            'name' => 'Dưa chuột Thái Lan            ',
            'description' => 'Là một trong những loại rau rất ít calo, 100g dưa chuột chỉ cung cấp 15 calo. Dưa chuột không chứa chất béo no hoặc cholesterol. Vỏ dưa chuột là nguồn chất xơ tốt giúp giảm táo bón và có tác dụng bảo vệ chống ung thư đại tràng nhờ loại bỏ những hợp chất độc trong ruột.

            Là nguồn kali rất tốt, một chất điện giải quan trọng trong tế bào. 100g dưa chuột cung cấp 147 mg kali nhưng chỉ cung cấp 2 mg natri. Kali là chất điện giải thân thiện với tim, giúp giảm huyết áp và nhịp tim nhờ đối kháng lại tác dụng của natri.',
            'price' => 15000,
            'photo' => 'dua-chuot1.jpg',
            'status'=> 'Còn Hàng',
            'quality' => 10,
        ]);
        DB::table('category_product')->insert([
            'product_id'=>5,
            'category_id'=>1,
        ]);
        DB::table('products')->insert([
            'name' => 'Mộc nhĩ đen các loại',
            'description' => 'Không chỉ là một loại thực phẩm góp phần cho các món ăn thêm ngon, mộc nhĩ cũng có tính chất dược liệu quan trọng và đã được sử dụng như một vị thuốc thảo dược trong các bài thuốc của y học cổ truyền. Có nhiều tác dụng tuyệt vời cho sức khỏe từ mộc nhĩ như chống oxy hóa, ngăn ngừa hiện tượng đông máu, giảm cân, "quý nhân" của làn da,...

            Mộc nhĩ đen (Nấm mèo, nấm tai mèo) có tên khoa học là Auricularia auricula, là những ký sinh trùng phát triển trên những cây có tán lá rộng hoặc trên những cây đã chết, chủ yếu vào mùa xuân, hạ, thu.',
            'price' => 99000,
            'photo' => 'moc-nhi1.jpg',
            'status'=> 'Còn Hàng',
            'quality' => 10,
        ]);
        DB::table('category_product')->insert([
            'product_id'=>6,
            'category_id'=>1,
        ]);
        DB::table('products')->insert([
            'name' => 'Nấm linh chi',
            'description' => 'Nấm Linh Chi chứa các chất dinh dưỡng có thể giúp cơ thể để duy trì sức khỏe, và cải thiện tình trạng sức khỏe nếu đang bệnh.

            Nấm Linh Chi tác dụng trên cơ thể chứ không phải trên bệnh. Linh Chi giúp thúc đẩyhệ thống miễn dịch tự nhiên giúp cơ thể luôn cân bằng và lần lượt xử lý riêng một loạt từngvấn đề sức khỏe. Linh Chi thúc đẩy sức khỏe tổng thể, giúp cơ thể luôn hài hòa và giúp duy trì sự cân bằng của cơ thể.
            
            Chất chống oxy hóa trung hòa tác dụng oxy hóa của các gốc tự do, tăng cường sự trao đổi chất. Linh Chi là một trong những chống oxy hóa mạnh nhất
            
            Nấm Linh Chi giúp duy trì và cải thiện sức khỏe nói chung.',
            'price' => 99000,
            'photo' => 'nam-linh-chi-1.jpg',
            'status'=> 'Còn Hàng',
            'quality' => 10,
        ]);
        DB::table('category_product')->insert([
            'product_id'=>7,
            'category_id'=>1,
        ]);
        DB::table('products')->insert([
            'name' => 'Quả óc chó',
            'description' => 'Quả óc chó giúp bà bầu bổ sung các chất dinh dưỡng thiết yếu nhất như Omega-3, Vitamin E, phốt pho và Axit Amin L-Arginne. Đặc biệt hàm lượng Omega-3 trong quả óc chó lớn hơn 3 lần trong cá hồi, giúp thúc đẩy sự phát triển đại não của thai nhi và trẻ nhỏ. Nếu các mẹ kiên trì ăn quả óc chó trong suốt thời gian thai kỳ, em bé sinh ra sẽ rất thông minh khỏe mạnh. ',
            'price' => 43000,
            'photo' => 'Quả óc chó-2.jpg',
            'status'=> 'Còn Hàng',
            'quality' => 10,
        ]);
        DB::table('category_product')->insert([
            'product_id'=>8,
            'category_id'=>1,
        ]);
        DB::table('products')->insert([
            'name' => 'Bưởi da xanh',
            'description' => 'Có nhiều kích thước tùy giống, chẳng hạn bưởi da xanh chỉ có đường kính độ 15 cm, trong khi bưởi Năm Roi, bưởi Tân Triều (Biên Hòa), bưởi da xanh (Bến Tre) và nhiều loại bưởi khác thường gặp ở Việt Nam, Thái Lan có đường kính khoảng 18–20 cm.

            Bưởi tiếng Anh gọi là Pomelo, tuy nhiên nhiều từ điển ở Việt Nam dịch bưởi ra thành grapefruit, thực ra grapefruit là tên gọi bằng tiếng Anh của bưởi chùm (Citrus paradisi) – loại cây lai giữa bưởi và cam, có quả nhỏ hơn, vỏ giống cam, mùi bưởi, ruột màu hồng, vị chua hơi đắng.',
            'price' => 43000,
            'photo' => 'buoi-1.jpg',
            'status'=> 'Còn Hàng',
            'quality' => 10,
        ]);
        DB::table('category_product')->insert([
            'product_id'=>9,
            'category_id'=>2,
        ]);
        DB::table('products')->insert([
            'name' => 'Cà chua bi',
            'description' => 'Tại sao cà chua thường được lựa chọn để chế biến trong các thực đơn hàng ngày? Bởi các vitamin trong cà chua không bị mất đi trong quá trình nấu chín. Theo phân tích, trong 100g cà chua có 2,2mg đường, 8mg canxi, 3,7mg kali, 0,4mg sắt, 0,3mg carotene, 0,6mg nitơ, vitamin A, B1, B2, C, P và các axit hữu cơ. Bài viết nay xin phân tích một số thành phần tiêu biểu của cà chua chín mang lại giá trị sức khỏe cho con người chúng ta.',
            'price' => 10000,
            'photo' => 'ca-chua.png',
            'status'=> 'Còn Hàng',
            'quality' => 10,
        ]);
        DB::table('category_product')->insert([
            'product_id'=>10,
            'category_id'=>2,
        ]);
        DB::table('products')->insert([
            'name' => 'Chuối Laba nhập khẩu Thái Lan',
            'description' => 'Chuối là một trong những loại trái cây được tiêu thụ rộng rãi nhất trên thế giới vì các lý do tốt cho sức khỏe.  Những trái cây có màu vàng mang những giá trị dinh dưỡng lớn với sức khỏe con người. Ngày  nay, chuối được trồng ở ít nhất 107 quốc gia và được xếp hạng thứ tư trong số các loại cây lương thực của thế giới. Tại nước ta chuối cũng được trồng khá phổ biến, khắp cả nước và được bán suốt bốn mùa trong năm.',
            'price' => 30000,
            'photo' => 'chuoi.jpg',
            'status'=> 'Còn Hàng',
            'quality' => 10,
        ]);
        DB::table('category_product')->insert([
            'product_id'=>11,
            'category_id'=>2,
        ]);
        DB::table('products')->insert([
            'name' => 'Chuối Nam Mỹ',
            'description' => 'Chuối là một loại thực phẩm, đồng thời cũng là một dược liệu thiên nhiên để hỗ trợ cho nhiều căn bệnh. So với quả táo, chuối có hàm lượng carbohydrate cao gấp 2 lần, protein cao gấp 4 lần, vitamin A và sắt cao gấp 5 lần, những loại vitamin và khoáng chất khác cao gấp 2 lần, hàm lượng phosphorus cao gấp 3 lần.',
            'price' => 12000,
            'photo' => 'chuoi-nam-my.jpg',
            'status'=> 'Còn Hàng',
            'quality' => 10,
        ]);
        DB::table('category_product')->insert([
            'product_id'=>12,
            'category_id'=>2,
        ]);
        DB::table('products')->insert([
            'name' => 'Dưa lưới nhập khẩu Thái Lan',
            'description' => 'Dưa lưới (Galia) thuộc họ bầu bí, quả dưa này hình tròn hoặc dài, da màu xanh, khi chín thì ngả vàng và có các đường gân trắng đan xen như lưới nên mới được gọi là dưa lưới. Thịt quả dưa lưới màu vàng da cam hoặc nghiêng vàng đỏ như đu đủ trông rất hấp dẫn và giàu caroten, ăn giòn, mát và thơm ngọt, hàm lượng đường cao.

            Được lớp vỏ dày bảo vệ nên trái luôn mọng nước (88%), hàm lượng potassium (300 mg/100g) đáng kể nên dưa lưới có tính năng thanh lọc, lợi niệu, chất xơ (1g/100g) giúp nhuận trường, ít calori (48 Kcal), beta caroten và vitamin C.',
            'price' => 12000,
            'photo' => 'Dưa lưới nhập khẩu Thái Lan-1.jpg',
            'status'=> 'Còn Hàng',
            'quality' => 10,
        ]);
        DB::table('category_product')->insert([
            'product_id'=>13,
            'category_id'=>2,
        ]);
        DB::table('products')->insert([
            'name' => 'Lựu đỏ Nam Phi nhập khẩu',
            'description' => 'Hạt lựu chín có giá trị dinh dưỡng cao, có tác dụng chống vi khuẩn, chống oxy hóa và tác dụng tẩy giun hiệu quả. Tuy nhiên thực tế đã có trường hợp trẻ em nguy kịch vì tắc ruột do ăn nhiều hạt lựu. Vì vậy, khi ăn không nên nuốt hạt lựu, với người lớn thì cần nhai kỹ trước khi nuốt.',
            'price' => 40000,
            'photo' => 'Lựu đỏ Nam Phi nhập khẩu-1.jpg',
            'status'=> 'Còn Hàng',
            'quality' => 10,
        ]);
        DB::table('category_product')->insert([
            'product_id'=>14,
            'category_id'=>2,
        ]);
        DB::table('products')->insert([
            'name' => 'Măng cụt chín Miền Nam',
            'description' => 'Măng cụt có nguồn gốc từ Mã Lai và Indonesia, được trồng từ hàng chục thế kỷ, cây đã được Thuyền Trưởng Cook mô tả khá chi tiết từ năm 1770, và được đưa đến Sri Lanka vào năm 1800, được trồng tại Anh trong các nhà kiếng (green house) từ 1855, sau đó đưa đến West Indies từ giữa thế kỷ 19. Đây là một loại cây đòi hỏi điều kiện thổ nhưỡng khắt khe cần khí hậu nóng và ẩm, cây tăng trưởng rất chậm, sau 2-3 năm cây chỉ cao đến đầu gối, chỉ bắt đầu cho quả sau 10-15 năm.. Cây đã được các nhà truyền giáo du nhập vào Nam Việt Nam từ lâu, trồng nhiều nhất tại Lái Thiêu, Thủ Dầu Một.',
            'price' => 80000,
            'photo' => 'Măng cụt chín Miền Nam1.png',
            'status'=> 'Còn Hàng',
            'quality' => 10,
        ]);
        DB::table('category_product')->insert([
            'product_id'=>15,
            'category_id'=>2,
        ]);
        DB::table('products')->insert([
            'name' => 'Đậu xanh',
            'description' => 'Măng cụt có nguồn gốc từ Mã Lai và Indonesia, được trồng từ hàng chục thế kỷ, cây đã được Thuyền Trưởng Cook mô tả khá chi tiết từ năm 1770, và được đưa đến Sri Lanka vào năm 1800, được trồng tại Anh trong các nhà kiếng (green house) từ 1855, sau đó đưa đến West Indies từ giữa thế kỷ 19. Đây là một loại cây đòi hỏi điều kiện thổ nhưỡng khắt khe cần khí hậu nóng và ẩm, cây tăng trưởng rất chậm, sau 2-3 năm cây chỉ cao đến đầu gối, chỉ bắt đầu cho quả sau 10-15 năm.. Cây đã được các nhà truyền giáo du nhập vào Nam Việt Nam từ lâu, trồng nhiều nhất tại Lái Thiêu, Thủ Dầu Một.',
            'price' => 80000,
            'photo' => 'Đậu xanh-1.jpg',
            'status'=> 'Còn Hàng',
            'quality' => 10,
        ]);
        DB::table('products')->insert([
            'name' => 'Hạt điều khô',
            'description' => 'Nói về sức tác dụng hàng đầu của hạt điều phải kể đến là tác dụng tốt cho tim mạch. Vì hạt điều chứa nhiều chất béo không bão hòa đơn, chất béo này tìm thấy nhiều trong dầu oliu.

            Chống oxy hóa, tốt cho xương, bảo vệ răng chắc khỏe
            Đặc biệt là trị táo bón cực kì hiệu quả, Hạt điều rất giàu kali, sắt, magiê, kẽm và các loại khoáng chất và một loại men có ích giúp kích thích các vi sinh vật có lợi cho đường ruôt phát triển, duy trì nguồn năng lượng trong cơ thể luôn dồi dào, giữ cho đường ruột luôn khỏe mạnh và giải quyết được chứng táo bón.',
            'price' => 280000,
            'photo' => 'Hạt điều khô-1.jpg',
            'status'=> 'Còn Hàng',
            'quality' => 10,
        ]);
        DB::table('products')->insert([
            'name' => 'Hạt hạnh nhân',
            'description' => 'Hạnh nhân rất tốt cho những người phòng ngừa các vấn đề về hàm lượng glucose và cholesterol. Thành phần trong hạt hạnh nhân giúp điều chỉnh, cân bằng 2 chất này, giúp phòng ngừa tiểu đường, mỡ máu, béo phì, thừa cân.
            Tác dụng của hạt hạnh nhân với giảm cân cũng là một lý do nhiều người đang trong quá trình giảm cân hoặc người thừa cân, béo phì sử dụng hạt hạnh nhân để vừa có thể giảm cơn thèm đồ ăn, vừa để giảm cân hoặc kiểm soát cân nặng.',
            'price' => 320000,
            'photo' => 'Hạt hạnh nhân-1.jpg',
            'status'=> 'Còn Hàng',
            'quality' => 10,
        ]);
        DB::table('products')->insert([
            'name' => 'Quả óc chó',
            'description' => 'Quả óc chó giúp bà bầu bổ sung các chất dinh dưỡng thiết yếu nhất như Omega-3, Vitamin E, phốt pho và Axit Amin L-Arginne. Đặc biệt hàm lượng Omega-3 trong quả óc chó lớn hơn 3 lần trong cá hồi, giúp thúc đẩy sự phát triển đại não của thai nhi và trẻ nhỏ. Nếu các mẹ kiên trì ăn quả óc chó trong suốt thời gian thai kỳ, em bé sinh ra sẽ rất thông minh khỏe mạnh. ',
            'price' => 430000,
            'photo' => 'qua-oc-cho (1).jpg',
            'status'=> 'Còn Hàng',
            'quality' => 10,
        ]);
        DB::table('products')->insert([
            'name' => 'Ba chỉ bò Mỹ',
            'description' => 'Trong 100g thịt bò có tới 28g protein cùng rất nhiều vitaminh B12, B6, khoáng chất cacnitin, kali, kẽm, magie, sắt, cung cấp 280kcal năng lượng, gấp đôi so với cá và nhiều loại thịt động vật khác.

            Là thực phẩm không thể thiếu trong thực đơn những ai muốn ăn kiêng hay những người năng chơi thể thao, thịt bò giúp tăng cường sức khỏe, ngăn ngừa bệnh tật và thúc đẩy quá trình hình thành các protein mới. Ngoài ra, nó còn hỗ trợ tích cực cho việc phục hồi cơ thể sau những buổi tập luyện mệt mỏ.
            
            Trong 100g thịt bò có tới 28g protein cùng rất nhiều vitaminh B12, B6, khoáng chất cacni tin , kali, kẽm, magie, sắt. Đồng thời, khối lượng thịt đó sẽ cung cấp 280kcal năng lượng, gấp đôi so với cá và nhiều loại thịt động vật khác.',
            'price' => 500000,
            'photo' => 'Ba chỉ bò Mỹ-1.jpg',
            'status'=> 'Còn Hàng',
            'quality' => 10,
        ]);
        DB::table('products')->insert([
            'name' => 'Sườn lợn Brazil',
            'description' => '1. Thịt lợn chứa nhiều vitamin B1. Vitamin B1 rất cần thiết cho sự tăng trưởng, phục hồi cơ bắp và các mô thần kinh. Nó cũng có ích trong quá trình chuyển hóa carbohydrate.

            2. Sự hiện diện của vitamin B2 (riboflavin) giúp bảo vệ làn da và sức khỏe. Nó có vai trò quan trọng trong việc sữa chữa các tế bào hư hại và chuyển hóa năng lượng từ thức ăn.
            
            3. Vitamin B6 có trong thịt lợn hỗ trợ quá trình chuyển hóa các chất béo, protein và carbohydrate, đồng thời giữ cho các chức năng của hệ thần kinh hoạt động bình thường.
            
            4. Thịt lợn thúc đẩy việc sản xuất tế bào máu của cơ thể.
            
            5. Sắt chứa trong thịt lợn giúp tăng cư',
            'price' => 200000,
            'photo' => 'Sườn lợn Brazil-1.jpg',
            'status'=> 'Còn Hàng',
            'quality' => 10,
        ]);
        DB::table('products')->insert([
            'name' => 'Thịt bò Kobe',
            'description' => 'Trong 100g thịt bò có tới 28g protein cùng rất nhiều vitaminh B12, B6, khoáng chất cacnitin, kali, kẽm, magie, sắt, cung cấp 280kcal năng lượng, gấp đôi so với cá và nhiều loại thịt động vật khác.

            Là thực phẩm không thể thiếu trong thực đơn những ai muốn ăn kiêng hay những người năng chơi thể thao, thịt bò giúp tăng cường sức khỏe, ngăn ngừa bệnh tật và thúc đẩy quá trình hình thành các protein mới. Ngoài ra, nó còn hỗ trợ tích cực cho việc phục hồi cơ thể sau những buổi tập luyện mệt mỏ.',
            'price' => 600000,
            'photo' => 'Thịt bò Kobe-1.jpg',
            'status'=> 'Còn Hàng',
            'quality' => 10,
        ]);
        DB::table('products')->insert([
            'name' => 'Thịt lợn nạc vai',
            'description' => 'Chất béo trong thịt lợn không phải là chất béo chuyển hóa mà chủ yếu là chất béo không bão hòa đơn và không bão hòa đa. Do đó, thịt lợn phù hợp với các chế độ ăn tốt cho tim mạch hoặc để giảm lượng cholesterol. Thịt lợn rất giàu khoáng chất như phốt pho, selenium, natri, kẽm, kali và đồng. Ngoài ra nó còn chứa hàm lượng sắt và magiê cao, tuy nhiên lượng canxi và mangan thì khá là ít ỏi. Thịt lợn là một nguồn cung vitamin phong phú như vitamin B1, B2, B5, B6, B12 và PP. Vitamin A và E cũng được tìm thấy tuy rất ít. Hàm lượng calo trong 100 gam thịt lợn là 458 calo.',
            'price' => 65000,
            'photo' => 'Thịt lợn nạc vai-1.jpg',
            'status'=> 'Còn Hàng',
            'quality' => 10,
        ]);
        DB::table('category_product')->insert([
            'product_id'=>16,
            'category_id'=>3,
        ]);
        DB::table('category_product')->insert([
            'product_id'=>17,
            'category_id'=>3,
        ]);
        DB::table('category_product')->insert([
            'product_id'=>18,
            'category_id'=>3,
        ]);
        DB::table('category_product')->insert([
            'product_id'=>19,
            'category_id'=>3,
        ]);
        DB::table('category_product')->insert([
            'product_id'=>20,
            'category_id'=>4,
        ]);
        DB::table('category_product')->insert([
            'product_id'=>21,
            'category_id'=>4,
        ]);
        DB::table('category_product')->insert([
            'product_id'=>22,
            'category_id'=>4,
        ]);
        DB::table('category_product')->insert([
            'product_id'=>23,
            'category_id'=>4,
        ]);

        DB::table('categories')->insert([
            'name' => 'Rau củ',
        ]);
        DB::table('categories')->insert([
            'name' => 'Hoa quả',
        ]);
        DB::table('categories')->insert([
            'name' => 'Các loại hạt',
        ]);
        DB::table('categories')->insert([
            'name' => 'Sản phẩm tươi sống',
        ]);
        DB::table('comments')->insert([
            'user_id' => 1,
            'product_id' => 1,
            'content' => "Chắc có mình tôi thấy sản phẩm này :)))",
        ]);
        DB::table('comments')->insert([
            'user_id' => 1,
            'product_id' => 2,
            'content' => "Người Dùng Không Viết Gì",
        ]);
        DB::table('comments')->insert([
            'user_id' => 1,
            'product_id' => 3,
            'content' => "Cũng Tạm :)))",
        ]);

        $this->call([RolePermissionSeeder::class]);
    }
}
