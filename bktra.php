<?php
// BÀI TRẮC NGHIỆM

// Câu 1 Đáp án Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 9 )
// Câu 2 Đáp án: A. TRUE
// Câu 3 Đáp án A. array()
// Câu 4 Đáp án a) readfile()
// Câu 5 b) Chuyển đổi một đối tượng thành một chuỗi

// BÀI TỰ LUẬN
// Câu 1

function generateFibonacci($n) {
    $fibonacci = [];

    if ($n < 0) {
        return $fibonacci;
    }

    for ($i = 0; $i < $n; $i++) {
        if ($i <= 1) {
            $fibonacci[] = $i;
        } else {
            $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }
    }

    return $fibonacci;
}

// 10 phần tử
$numberOfFibonacci = 10;

// Tạo và hiển thị dãy số Fibonacci
$fibonacciResult= generateFibonacci($numberOfFibonacci);

echo "Dãy số Fibonacci đầu tiên có $numberOfFibonacci phần tử là: ";
echo implode(", ",$fibonacciResult);
echo "<br>";

// Câu 2:

// Mảng chứa thông tin về học sinh
$hocSinhs = [
    'hocSinh1' => ['id' => 1, 'ten' => 'Đặng Linh', 'tuoi' => 21, 'diem' => 8],
    'hocSinh2' => ['id' => 2, 'ten' => 'Thùy Dương', 'tuoi' => 19, 'diem' => 9],
    'hocSinh3' => ['id' => 3, 'ten' => 'Minh Giang', 'tuoi' => 20, 'diem' => 7],
    'hocSinh4' => ['id' => 4, 'ten' => 'Quỳnh Anh', 'tuoi' => 20, 'diem' => 6],
];

// Hiển thị thông tin của tất cả học sinh
echo "Thông tin của tất cả học sinh:\n";

foreach ($hocSinhs as $hocSinh) {
    echo "ID: {$hocSinh['id']}, Tên: {$hocSinh['ten']}, Tuổi: {$hocSinh['tuoi']}, Điểm: {$hocSinh['diem']}\n";
}

// Tìm học sinh có điểm cao nhất
$diemCaoNhat = 0;
$hSinhCoDiemCaoNhat = null;

foreach ($hocSinhs as $hocSinh) {
    if ($hocSinh['diem'] > $diemCaoNhat) {
        $diemCaoNhat = $hocSinh['diem'];
        $hSinhCoDiemCaoNhat = $hocSinh;
    }
}

// Hiển thị thông tin học sinh có điểm cao nhất
echo "\nSinh viên có điểm cao nhất:\n";
echo "ID: {$hSinhCoDiemCaoNhat['id']}, Tên: {$hSinhCoDiemCaoNhat['ten']}, Tuổi: {$hSinhCoDiemCaoNhat['tuoi']}, Điểm: {$hSinhCoDiemCaoNhat['diem']}\n";
?>
