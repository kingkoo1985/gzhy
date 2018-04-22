<?php
/**
 * File: error.php
 * Desc: 错误信息显示
 * User: liujinxing
 * Date: 2016-07-19
 */
return [
    'error'     => '错误',
    'errCode' => [
        // 1- 200 返回正确信息
        0   => '操作成功',

        // 200 以上是返回错误信息
        201 => '提交参数为空',
        202 => '创建目录失败',
        203 => '文件上传失败',
        204 => '文件上传移送失败',
        205 => '数据载入失败',
        206 => '服务器繁忙, 请稍候再试...',
        207 => '提交参数错误, 请确认操作',
        208 => '抱歉! 你没有删除角色的权限',
        209 => '抱歉! 这个角色还在使用',
        210 => '抱歉! 删除角色失败',
        211 => '添加角色失败',
        212 => '添加权限失败',
        213 => '修改权限失败',
        214 => '抱歉! 你没有删除权限操作的权限',
        215 => '抱歉! 删除权限失败',
        216 => '对不起，您现在还没获得该操作的权限!',
        217 => '抱歉! 您填写的数据表信息不存在',
        218 => '抱歉! 查询数据表信息出现错误',
        219 => '抱歉! 文件存在, 不能执行覆盖操作',
        220 => '查询数据不存在, 请确认操作',
        221 => '没有文件上传',
        222 => '删除数据不存在',

        1001 => '添加数据存在错误',
        1002 => '修改的数据不存在',
        1003 => '修改数据存在错误',
        1004 => '删除数据失败',
    ],
];