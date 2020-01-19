<?php
function getTimeNow()
{
    $now = now();
    $weekDays = [
        0 => 'Chủ Nhật',
        1 => 'Thứ Hai',
        2 => 'Thứ Ba',
        3 => 'Thứ Tư',
        4 => 'Thứ Năm',
        5 => 'Thứ Sáu',
        6 => 'Thứ Bảy'
    ];
    return $weekDays[$now->format('w')] . ', ' . $now->format('d/m/Y H:i');
}
