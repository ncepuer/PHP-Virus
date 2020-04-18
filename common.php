<?php
return $common = [

    /*
    |--------------------------------------------------------------------------
    | 这里配置简单的模型参数
    |--------------------------------------------------------------------------
    |注意：实际情况当中，该模型关系网异常复杂，本程序仅利用很简单的小学数学来模拟过程，请勿用于真实预测！
    */

    'people' => 14000,  //初始健康人数
    'yisi' => 4,  //初始疑似人数
    'quezhen' => 1,  //初始确诊人数

    // 确诊患者感染参数
    'y_rate' => 3,   //感染率（即：一个已确诊感染者活动一天，将产生的疑似病例数量）
    'g_rate' => 1,   //致病率（即：一个确诊感染者活动一天，将产生的感染数量）

    // 疑似患者感染参数
    'y_g_rate' => 1,  //疑似患者感染其他人造成疑似感染人数


    // 潜伏期
    'qf_date' => 3, //天

    // 医疗
    'h_num' => 0,  //医疗设施，默认初期无人关注
    'h_q_rate' => 1,  //每项医疗措施可治愈的确诊人数
    'h_y_rate' => 5, // 每项医疗措施可治愈的疑似人数
    //date
    'day' =>1, //固定默认初始化从第一天开始
];
