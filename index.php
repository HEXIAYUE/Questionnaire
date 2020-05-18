<?php
//题目
header("Content-Type: text/html;charset=utf-8");
$problem = array(
  '1_1' => array(
    'title' => '1.你的性别是（      ）',
    'type' => 'radio',
    'required' => true,
    'xuanxiang' => array(
      '1' => 'A.男',
      '2' => 'B.女',
    )
  ),
  '1_2' => array(
    'title' => '2. 你的政治面貌是（      ）',
    'type' => 'radio',
    'required' => true,
    'xuanxiang' => array(
      '1' => 'A.中共党员',
      '2' => 'B.共青团员',
      '3' => 'C.群众',
    )
  ),

  '1_3' => array(
    'title' => '3. 你所在的校区是（      ）',
    'type' => 'radio',
    'required' => true,
    'xuanxiang' => array(
      '1' => 'A.东校区 ',
      '2' => 'B.西校区',
      '3' => 'C.武汉校区',
      '4' => 'D.沙市校区',
    )
  ),

  '1_4' => array(
    'title' => '4.你的专业类型是（      ）',
    'type' => 'radio',
    'required' => true,
    'xuanxiang' => array(
      '1' => 'A.文科  ',
      '2' => 'B.工科',
      '3' => 'C.理科',
    )
  ),

  '1_5' => array(
    'title' => '5．你来自（      ）省（自治区、直辖市）',
    'type' => 'select',
    'required' => true,
    'xuanxiang' => array(
      '1' => '-请选择-',
      '2' => '北京市',
      '3' => '上海市',
      '4' => '天津市',
      '5' => '重庆市',
      '6' => '河北省',
      '7' => '山西省',
      '8' => '内蒙古自治区',
      '9' => '辽宁省',
      '10' => '吉林省',
      '11' => '黑龙江省',
      '12' => '江苏省',
      '13' => '浙江省',
      '14' => '安徽省',
      '15' => '福建省',
      '16' => '江西省',
      '17' => '山东省',
      '18' => '河南省',
      '19' => '湖北省',
      '20' => '湖南省',
      '21' => '广东省',
      '22' => '广西壮族自治区',
      '23' => '海南省',
      '24' => '四川省',
      '25' => '贵州省',
      '26' => '云南省',
      '27' => '西藏自治区',
      '28' => '陕西省',
      '29' => '甘肃省',
      '30' => '宁夏回族自治区',
      '31' => '青海省',
      '32' => '新疆维吾尔族自治区',
      '33' => '香港特别行政区',
      '34' => '澳门特别行政区',
      '35' => '台湾省',
      '36' => '其它',
    )
  ),

  '1_6' => array(
    'title' => '6．你选择就读于长江大学，是因为（      ）',
    'type' => 'radio',
    'required' => true,
    'xuanxiang' => array(
      '1' => 'A.来自网络宣传  ',
      '2' => 'B.学校招生宣传',
      '3' => 'C.高中班主任老师推介 ',
      '4' => 'D.亲朋好友的推介',
      '5' => 'E.学校本身的社会影响和办学实力',
      '6' => 'F.考分刚够本校录取线',
      '7' => 'G．其他原因',
    )
  ),

  '2_1' => array(
    'title' => 'Q1：你的信仰最倾向于（      ）',
    'type' => 'radio',
    'required' => true,
    'xuanxiang' => array(
      '1' => 'A.共产主义  ',
      '2' => 'B.集体主义',
      '3' => 'C.理想主义 ',
      '4' => 'D.科学',
      '5' => 'E.实用主义',
      '6' => 'F.个人主义',

    )
  ),


  '2_2' => array(
    'title' => 'Q2：你认为对你的信仰形成影响最大的是（       ）（可多选）',
    'type' => 'checkbox',
    'required' => false,
    'xuanxiang' => array(
      '1' => 'A.书籍  ',
      '2' => 'B.网络和大众传媒',
      '3' => 'C.老师和学校教育 ',
      '4' => 'D.社会环境',
      '5' => 'E.朋友',
      '6' => 'F.家庭',
      '7' => 'G.说不清楚',
    )
  ),

  '2_3' => array(
    'title' => 'Q3：更能左右你的人生理想和价值追求的是（      ）',
    'type' => 'radio',
    'required' => true,
    'xuanxiang' => array(
      '1' => 'A.科学技术进步与发展  ',
      '2' => 'B.物价或房价 ',
      '3' => 'C.崇高的理想 ',
      '4' => 'D.没考虑过这个问题',
      '5' => 'E.其他原因',
    )
  ),


  '2_4' => array(
    'title' => 'Q4：社会主义核心价值观的主要内容是（      ）',
    'type' => 'radio',
    'required' => true,
    'xuanxiang' => array(
      '1' => 'A.爱国主义、集体主义、社会主义',
      '2' => 'B.富强、民主、文明、和谐，自由、平等、公正、法治，爱国、敬业、诚信、友善 ',
      '3' => 'C.社会公德、职业道德、家庭美德 ',
      '4' => 'D.国家富强、民族振兴、人民幸福',
    )
  ),



  '2_5' => array(
    'title' => 'Q5：“四个全面”是指（      ）（多选）',
    'type' => 'checkbox',
    'required' => false,
    'xuanxiang' => array(
      '1' => 'A.全面建成小康社会  ',
      '2' => 'B.全面深化改革',
      '3' => 'C.全面依法治国 ',
      '4' => 'D.全面从严治党',
      '5' => 'E.全面生态保护',
      '6' => 'F.全面发展经济',
    )
  ),


  '2_6' => array(
    'title' => 'Q6：你觉得当前的新冠肺炎疫情对你的学习和就业（      ）',
    'type' => 'radio',
    'required' => true,
    'xuanxiang' => array(
      '1' => 'A.影响非常大',
      '2' => 'B.有一定影响',
      '3' => 'C.影响不大 ',
    )
  ),


  '2_7' => array(
    'title' => 'Q7：你对抗击新冠肺炎疫情所做出的贡献有（       ）(可多选)',
    'type' => 'checkbox',
    'required' => false,
    'xuanxiang' => array(
      '1' => 'A.自主居家隔离   ',
      '2' => 'B.参与志愿活动',
      '3' => 'C.参与捐款/捐赠物资 ',
      '4' => 'D.前往抗疫前线',
      '5' => 'E.参与基层防疫工作',
      '6' => 'F.其他',
    )
  ),


  '2_8' => array(
    'title' => 'Q8：你对“中国的发展前途”总体看法是（      ）',
    'type' => 'radio',
    'required' => true,
    'xuanxiang' => array(
      '1' => '非常乐观',
      '2' => 'B.比较乐观',
      '3' => 'C.比较悲观',
      '4' => 'D.说不清楚',
    )
  ),

  '2_9' => array(
    'title' => 'Q9：在当前制约中国发展的各种问题中，你认为最能影响其可持续发展的是（      ）',
    'type' => 'radio',
    'required' => true,
    'xuanxiang' => array(
      '1' => 'A.劳动就业',
      '2' => 'B.物价房价',
      '3' => 'C.医疗卫生 ',
      '4' => 'D.教育公平',
      '5' => 'E.食品安全',
      '6' => 'F.收入分配',
      '7' => 'G.环保治安',
      '8' => 'H.腐败问题',
      '9' => 'I.科技水平',
    )
  ),


  '2_10' => array(
    'title' => 'Q10：你认为自己的人生追求和国家发展的关系是（      ）',
    'type' => 'radio',
    'required' => true,
    'xuanxiang' => array(
      '1' => 'A.服务于国家富强、民族振兴和人民幸福是自己毕生的追求',
      '2' => 'B.总是密切了解国家发展动向，并想把自己的前途和国家的发展联系起来',
      '3' => 'C.有时会将自己的前途和国家的发展联系起来 ',
      '4' => 'D.国家发展话题太大，就是想干好自己的本职工作就可以了',
    )
  ),


  '2_11' => array(
    'title' => 'Q11：你对自己所学习的专业的态度是（      ）',
    'type' => 'radio',
    'required' => true,
    'xuanxiang' => array(
      '1' => 'A.很喜欢',
      '2' => 'B.喜欢',
      '3' => 'C.一般 ',
      '4' => 'D.不喜欢',
    )
  ),

  '2_12' => array(
    'title' => 'Q12：你认为影响自己今后事业成功的最主要因素是 (      )',
    'type' => 'radio',
    'required' => true,
    'xuanxiang' => array(
      '1' => 'A.成绩',
      '2' => 'B.专业',
      '3' => 'C.特长 ',
      '4' => 'D.学历',
      '5' => 'E.能力',
      '6' => 'F.人脉',
      '7' => 'G.其他因素',
    )
  ),


  '2_13' => array(
    'title' => 'Q13：你对自己今后所要从事的职业（      ）',
    'type' => 'radio',
    'required' => true,
    'xuanxiang' => array(
      '1' => 'A.非常了解',
      '2' => 'B.了解',
      '3' => 'C.不太了解 ',
      '4' => 'D.完全不了解',
    )
  ),


  '2_14' => array(
    'title' => 'Q14：你就业的主要目的是（      ）',
    'type' => 'radio',
    'required' => true,
    'xuanxiang' => array(
      '1' => 'A.为社会发展做贡献 ',
      '2' => 'B.为实现自己的人生目标',
      '3' => 'C.为满足自我的生存需要  ',
      '4' => 'D.其他',
    )
  ),


  '2_15' => array(
    'title' => 'Q15：你对自己所签约的工作最看重的是（      ）',
    'type' => 'radio',
    'required' => true,
    'xuanxiang' => array(
      '1' => 'A.发展空间',
      '2' => 'B.薪水、福利待遇',
      '3' => 'C.工作稳定 ',
      '4' => 'D.工作环境',
      '5' => 'E.行业或工作喜好',
      '6' => 'F.所在地域',
      '7' => 'G.其他因素',
    )
  ),


  '2_16' => array(
    'title' => 'Q16: 你觉得目前最好的毕业去向是（      ）',
    'type' => 'radio',
    'required' => true,
    'xuanxiang' => array(
      '1' => 'A.考研',
      '2' => 'B.自主创业',
      '3' => 'C.考公务员 ',
      '4' => 'D.找工作',
      '5' => 'E.暂不就业',
    )
  ),


  '2_17' => array(
    'title' => 'Q17：在大学生涯中，你提升自己的精神品位或人文素养主要通过（       ）（可多选）',
    'type' => 'checkbox',
    'required' => false,
    'xuanxiang' => array(
      '1' => 'A.抓住第一课堂，学好专业',
      '2' => 'B.参加学校组织的课外活动或学生社团活动',
      '3' => 'C.向老师学习 ',
      '4' => 'D.积极参加社会公益活动',
      '5' => 'E.课外阅读',
      '6' => 'F.其他途径',
    )
  ),


  '2_18' => array(
    'title' => 'Q18:你认为学校组织的学生课外活动（      ）',
    'type' => 'radio',
    'required' => true,
    'xuanxiang' => array(
      '1' => 'A.较多',
      '2' => 'B.较少',
      '3' => 'C.不了解',
    )
  ),


  '2_19' => array(
    'title' => 'Q19：你认为学校组织的学生课外活动对自己的成长成才（      ）',
    'type' => 'radio',
    'required' => true,
    'xuanxiang' => array(
      '1' => 'A.有很大帮助',
      '2' => 'B.有一定帮助',
      '3' => 'C.帮助不大',
    )
  ),

  '2_20' => array(
    'title' => 'Q20：你认为学校现在开设的思想政治理论课对自己了解国情民情（      ）',
    'type' => 'radio',
    'required' => true,
    'xuanxiang' => array(
      '1' => 'A.很有作用',
      '2' => 'B.作用较大',
      '3' => 'C.作用较小',
    )
  ),


  '2_21' => array(
    'title' => 'Q21：你对学校思想政治理论课教学的总体印象是（      ）',
    'type' => 'radio',
    'required' => true,
    'xuanxiang' => array(
      '1' => 'A.很好',
      '2' => 'B.好',
      '3' => 'C.一般',
      '4' => 'D.较差',
    )
  ),


  '2_22' => array(
    'title' => 'Q22：你对学校专业和课程设置的看法是（      ）',
    'type' => 'radio',
    'required' => true,
    'xuanxiang' => array(
      '1' => 'A.专业和课程设置很合理，很切合学生和社会的实际需要',
      '2' => 'B.专业和课程设置较合理，比较切合学生和社会的实际需要',
      '3' => 'C.专业和课程设置不合理，与学生和社会的实际需要严重脱节',
      '4' => 'D.其他',
    )
  ),


  '2_23' => array(
    'title' => 'Q23：你对学校教师授课的总体评价是（      ）',
    'type' => 'radio',
    'required' => true,
    'xuanxiang' => array(
      '1' => 'A.学识广博，课程内容有深度、有趣味',
      '2' => 'B.学识一般，课程内容缺乏深度和趣味  ',
      '3' => 'C.学识较差，课程内容死板、无深度',
      '4' => 'D.其他',
    )
  ),


  '2_24' => array(
    'title' => 'Q24：你对学校管理岗位老师的总体评价是（      ）',
    'type' => 'radio',
    'required' => true,
    'xuanxiang' => array(
      '1' => 'A.工作认真负责，关心学生，很有亲和力',
      '2' => 'B.工作较负责，比较关心学生，较有亲和力  ',
      '3' => 'C.工作不负责，对学生漠不关心，有一定的官僚主义作风',
      '4' => 'D.其他',
    )
  ),

  '2_25' => array(
    'title' => 'Q25：你对学校后勤服务岗位老师的总体评价是（      ）',
    'type' => 'radio',
    'required' => true,
    'xuanxiang' => array(
      '1' => 'A.关心学生，服务意识很强',
      '2' => 'B.比较关心学生，服务意识较强  ',
      '3' => 'C.对学生漠不关心，有较大的距离感，服务态度差',
      '4' => 'D.其他',
    )
  ),


  '2_26' => array(
    'title' => 'Q26：生活中遇到困难时，你首先想到的求助对象是（      ）',
    'type' => 'radio',
    'required' => true,
    'xuanxiang' => array(
      '1' => 'A.辅导员',
      '2' => 'B.班主任  ',
      '3' => 'C.熟悉的任课老师',
      '4' => 'D.同学',
      '5' => 'E.同乡',
      '6' => 'F.其他人员',
    )
  ),

  '2_27' => array(
    'title' => 'Q27:如果满分为10分，你对学校办学水平的总体评价是（      ）',
    'type' => 'radio',
    'required' => true,
    'xuanxiang' => array(
      '1' => 'A.9分及以上',
      '2' => 'B.7到9分之间',
      '3' => 'C.6到7分之间',
      '4' => 'D.6分以下',
    )
  ),


  '2_28' => array(
    'title' => 'Q28：在长江大学就读期间,对你帮助最大的一位老师是：（请写明老师的单位和职务等）',
    'type' => 'textarea',
    'required' => false,
    'maxlength' => 400,

  ),

  '2_29' => array(
    'title' => 'Q29：当前你面临的最大困扰是：',
    'type' => 'textarea',
    'required' => false,
    'maxlength' => 400,
  ),

  '2_30' => array(
    'title' => 'Q30：毕业前你最想对校长说的一句话是：',
    'type' => 'textarea',
    'required' => false,
    'maxlength' => 400,

  ),
)


?>


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>毕业调查问卷</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div id="app">
    <div id="header">
      <h2>长江大学2020届毕业生思想状况调查问卷</h2>
      <h4>亲爱的2020届毕业生：</h4>
      <p>你们好！再过一个月，你们就将大学毕业，迈向新的人生旅程。为了全面、深入、准确地了
        解你们的所思、所想、所需、所求，以便我们更有成效地开展大学生思想政治工作，我们设计
        了本问卷，希望得到你的支持！</p>
      <p>本问卷用于对我们改进学生思政工作而进行的数据统计
        分析，不会给你个人带来任何不利影响。请根据自身真实状况，于2019年6月10日前完成填写。非常感
        谢你的支持与合作！</p>
      <p><b>（请扫码完成问卷）</b></p>
      <p>长江大学党委宣传部
        2020年5月20日
      </p>
    </div>

    <div id="mid">
      <form action="post.php" target="_blank" onsubmit="return Submit()" method="POST">

        <?php
        $n = 0;
        $p = 0;
        $s = 1;

        foreach ($problem as $i) {
          if ($s == 1) {
            echo "<h4>";
            echo "一、个人基本信息";
            echo "</h4>";
          } else if ($s == 8) {
            echo "<h4>";
            echo "二、选择题";
            echo "</h4>";
          } else if ($s == 35) {
            echo "<h4>";
            echo "三、开放题";
            echo "</h4>";
          }
          //textarea
          if ($i['type'] == "textarea") {
            echo "<div class='text'>";
            echo "<p>";
            echo $i['title'];
            echo "</p>";
            echo "<textarea name=btn[$n]  maxlength=$i[maxlength]   />";
            echo "</textarea>";
            echo "</div>";
            $s++;
          } else {
            echo "<div class='radio'>";
            echo "<p>";
            echo $i['title'];
            echo "</p>";

            //select
            if ($i['type'] == "select") {
              echo "<select id='pro' name=btn[$n] required= $i[required]>";
              foreach ($i as $value2) {
                if (is_array($value2)) {
                  foreach ($value2 as $item2) {
                    if ($item2 == "-请选择-") {
                      echo "<option value=''>";
                      echo $item2;
                      echo "</option>";
                    } else {
                      echo "<option value=$item2>";
                      echo $item2;
                      echo "</option>";
                    }
                  }
                }
              }
              echo "</select>";
              $s++;
            } else {
              foreach ($i as $value) {
                if (is_array($value)) {
                  foreach ($value as $item) {
                    echo "<p>";
                    if ($i['type'] == "checkbox") {
                      echo "<input type= $i[type]   name=btn[$n][] value=$item id=$p   />";
                    } else {
                      echo "<input type= $i[type]   name=btn[$n] value=$item id=$p required= $i[required]  />";
                    }
                    echo " <label for=$p >";
                    echo  $item;
                    echo "</label>";
                    echo "</p>";
                    $p++;
                  }
                }
              }
            }
            echo "</div>";
            $n++;
            $s++;
          }
        }

        ?>

        <input type="submit" value="提交" />
      </form>
    </div>
  </div>
  <script src="1.js"></script>
</body>