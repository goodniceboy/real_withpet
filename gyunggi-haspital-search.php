<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Petology</title>

  <style>
    .col-lg-3.align-self-center label {
        position: relative; /* 라벨을 상대적으로 위치시킵니다. */
        display: flex;
        align-items: center;
        justify-content: flex-end; /* 라벨의 오른쪽 끝에 이미지를 정렬합니다. */
        width: 100%;
    }

    .col-lg-3.align-self-center label img {
        position: absolute; /* 이미지를 절대적으로 위치시킵니다. */
        right: 0; /* 오른쪽으로부터의 거리를 0으로 설정하여 라벨의 오른쪽 끝에 고정시킵니다. */
        margin-top: 4px;
        margin-right: 5px; /* 이미지와 텍스트 사이의 간격을 조정합니다. */
        width: 25px; /* 이미지의 너비를 조정합니다. */
        height: 25px; /* 이미지의 높이를 조정합니다. */
    }

    #selected-date-text {
      display: none; /* 초기에는 선택된 날짜를 숨깁니다 */
      margin-top: 5px; /* Adjust the top margin as needed */
      margin-bottom: 5px; /* Adjust the bottom margin as needed */
      
    }

    form#search-form label {
      display: block; /* Ensure the label takes up the full width */
      margin-top: 10px; /* Adjust the top margin as needed */
      margin-bottom: 10px; /* Adjust the bottom margin as needed */
    }

    #selected-date-text {
      display: inline-block; /* Ensure the text appears inline with other elements */
      margin-top: 5px; /* Adjust the top margin as needed */
      margin-bottom: 5px; /* Adjust the bottom margin as needed */
    }

    .selected-date {
      margin-top: 20px;
      font-size: 18px;
    }

    form#search-form {
    background-color: #fff;
    padding: 0px 0px 0px 30px;
    width: 100%;
    border-radius: 7px;
    display: inline-block;
    text-align: center;
    }

    form#search-form select,
    form#search-form input {
    width: 100%;
    height: 36px;
    background-color: transparent;
    border: none;
    color: #2a2a2a;
    font-size: 15px;
    outline: none;
    }

    .form-select:focus {
    box-shadow: none;
    }

    form#search-form input.searchText {
    border-left: 1px solid #8d99af;
    border-right: 1px solid #8d99af;
    padding: 0px 30px;
    }

    form#search-form input::placeholder {
    color: #2a2a2a;
    font-size: 15px;
    }

    form#search-form button {
    width: 100%;
    height: 100%;
    background-color: #8d99af;
    border: none;
    padding: 15px;
    color: #fff;
    font-size: 15px;
    border-top-right-radius: 7px;
    border-bottom-right-radius: 7px;
    }

    form#search-form button i {
    width: 40px;
    height: 40px;
    background-color: #fff;
    border-radius: 50%;
    color: #8d99af;
    display: inline-block;
    text-align: center;
    line-height: 38px;
    margin-right: 10px;
    }

    /*달력이미지 내용*/

    button {
            border:none;
            outline: none;
            background-color: transparent;
            padding:0;
            cursor:pointer;
    }

    .calendar-design {
        display: none; /* 달력 숨기기 */
        position: relative;
        top: 33.7%;
        right: -62.52%;
        transform: translateY(-50%);
        align-items: center;
        justify-content: center;
        width: 315.5px;
        min-height: 70vh;
        background: #fff;
    }

    .wrapper {
      border-left: 1px solid #000;
      border-right: 1px solid #000;
      border-bottom: 1px solid #000;
        position: absolute;
        top: -15%;
        left: 0;
        z-index: 1000;
        display: block; /* 변경: 달력이 보이도록 함 */
        background: #fff;
    }


    .wrapper .nav {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 30px;
        background: #fff;
    }

    .wrapper .nav .current-date {
        font-size: 24px;
        font-weight: 600;
        margin-top: 15px;
    }

    .wrapper .nav button {
        width: 38px;
        height: 38px;
        font-size: 30px;
        color: #878787;
    }

    .calendar ul {
        display: flex;
        list-style: none;
        flex-wrap: wrap;
        text-align: center;
    }

    .calendar .weeks li {
        font-weight: 500;
    }

    .calendar .days {
        margin-bottom: 20px;
    }

    .calendar ul li {
        width: calc(100% / 7);
        position: relative;
    }

    .calendar .days li {
        z-index: 1;
         margin-top: 30px;
        cursor: pointer;
    }

    .days li.inactive {
        color: #aaa;
    }

    .days li.active {
        color: #fff;
    }

    .calendar .days li::before {
        position: absolute;
        content: '';
        height: 40px;
        width: 40px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 50%;
        z-index: -1;
    }

    .days li:hover::before {
        background: #f2f2f2;
    }

    .days li.active::before {
        background: #008aff;
    }
  </style>
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
          <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
              <a class="navbar-brand" href="index.php">
                <img src="images/doglogo1.png" alt="">
                <span>
                  WITH PET
                </span>
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
    
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
                  <ul class="navbar-nav  ">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="cafe-region.html">CAFE </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="haspital-region.php">HOSPITAL</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="shop-region.html">SHOP</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="service-region.html">SERVICE</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="culture-region.html">CULTURE</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="LOGIN.html">LOGIN</a>
                    </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                    <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                  </form>
                  <p>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</p>
                </div>
              </div>
            </nav>
          </div>
        </header>
        <!--welcome-hero start -->
      <section id="home" class="slider_section">
         <div class="container">
            <div class="welcome-hero-txt">
            </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form id="search-form" name="gs" method="submit" role="search" action="#">
                            <div class="row">
                              <div class="col-lg-2 align-self-center">
                                <fieldset>
                                    <input type="address" name="address" class="searchText" placeholder="경기도" readonly>
                                </fieldset>
                              </div>
                              <div class="col-lg-3 align-self-center">
                                  <fieldset>
                                      <select name="area" class="form-select" aria-label="Area" id="chooseCategory" onchange="this.form.click()">
                                          <option selected>지역구를 선택해주세요</option>
                                          <option>가평군</option>
                                          <option>고양시</option>
                                          <option>과천시</option>
                                          <option>광명시</option>
                                          <option>광주시</option>
                                          <option>구리시</option>
                                          <option>군포시</option>
                                          <option>김포시</option>
                                          <option>남양주시</option>
                                          <option>동두천시</option>
                                          <option>부천시</option>
                                          <option>성남시</option>
                                          <option>수원시</option>
                                          <option>시흥시</option>
                                          <option>안산시</option>
                                          <option>안성시</option>
                                          <option>안양시</option>
                                          <option>양주시</option>
                                          <option>양평군</option>
                                          <option>여주시</option>
                                          <option>연천군</option>
                                          <option>오산시</option>
                                          <option>용인시</option>
                                          <option>의왕시</option>
                                          <option>의정부시</option>
                                          <option>이천시</option>
                                          <option>파주시</option>
                                          <option>평택시</option>
                                          <option>포천시</option>
                                          <option>하남시</option>
                                          <option>화성시</option>
                                      </select>
                                  </fieldset>
                              </div>
                              <div class="col-lg-3 align-self-center">
                                  <fieldset>
                                      <input type="address" name="address" class="searchText" placeholder="동을 입력해주세요" autocomplete="on">
                                  </fieldset>
                              </div>
                              <div class="col-lg-3 align-self-center">
                                  <fieldset>
                                      <label name="date" onchange="this.form.click()">
                                        <div>                                      
                                          <span id="selected-date-text"></span>
                                          <img src="images/calendar.png" alt="calendar" width="25" height="25"> 
                                        </div>                                                                                
                                      </label>
                                  </fieldset>
                              </div>
                              <div class="col-lg-1">                        
                                  <fieldset>
                                      <button class="main-button"><img src="images/search-icon.png" alt="돋보기" width="25" height="25"></button>
                                  </fieldset>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>               
        </section>
        <div class="calendar-design">
        <div class="wrapper">
            <header>
                <div class="nav">
                    <button class="material-icons"> chevron_left </button>
                    <p class="current-date"></p>
                    <button class="material-icons"> chevron_right </span>
                </div>
            </header>
            <div class="calendar">
                <ul class="weeks pl-0">
                    <li>Sun</li>
                    <li>Mon</li>
                    <li>Tue</li>
                    <li>Wed</li>
                    <li>Thu</li>
                    <li>Fri</li>
                    <li>Sat</li>
                </ul>
                <ul class="days pl-0">
                    <li class="inactive">27</li>
                    <li class="inactive">28</li>
                    <li class="inactive">29</li>
                    <li class="inactive">30</li>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>5</li>
                    <li>6</li>
                    <li>7</li>
                    <li>8</li>
                    <li>9</li>
                    <li>10</li>
                    <li>11</li>
                    <li>12</li>
                    <li>13</li>
                    <li>14</li>
                    <li>15</li>
                    <li>16</li>
                    <li>17</li>
                    <li>18</li>
                    <li>19</li>
                    <li>20</li>
                    <li>21</li>
                    <li>22</li>
                    <li>23</li>
                    <li>24</li>
                    <li>25</li>
                    <li>26</li>
                    <li>27</li>
                    <li>28</li>
                    <li>29</li>
                    <li>30</li>
                    <li>31</li>
                </ul>
            </div>
        </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        // 선택된 날짜 표시 요소와 초기 값 설정
        const selectedDateText = document.getElementById('selected-date-text');
        selectedDateText.textContent = '날짜를 선택해주세요'; // 초기 텍스트

        const calendarIcon = document.querySelector('img[src="images/calendar.png"]');
        const calendarDesign = document.querySelector('.calendar-design');
        
        // 달력 이미지를 클릭하여 달력이 열렸을 때의 이벤트 처리
        calendarIcon.addEventListener('click', function() {
            if (calendarDesign.style.display === 'none' || calendarDesign.style.display === '') {
                calendarDesign.style.display = 'block'; // 달력이 숨겨져 있을 때 보이도록 변경
                selectedDateText.style.display = 'inline-block'; // 달력이 나타날 때 초기 텍스트를 보이도록 변경
            } else {
                calendarDesign.style.display = 'none'; // 달력이 보이고 있을 때 숨기도록 변경
                // 사용자가 날짜를 선택하지 않았을 경우에만 텍스트를 유지
                if (!selectedDateText.textContent.includes('-')) {
                    selectedDateText.style.display = 'inline-block'; // 텍스트를 보이도록 변경
                }
            }
        });

        // 달력을 클릭하여 달력이 닫혔을 때의 이벤트 처리
        calendarDesign.addEventListener('click', function() {
            // 달력이 열려있는 상태에서 달력 외부를 클릭하면 달력이 닫힌다고 가정
            calendarDesign.style.display = 'none'; // 달력이 보이고 있을 때 숨기도록 변경
            // 사용자가 날짜를 선택하지 않았을 경우에만 텍스트를 유지
            if (!selectedDateText.textContent.includes('-')) {
                selectedDateText.style.display = 'inline-block'; // 텍스트를 보이도록 변경
            }
        });

        // Toggle calendar display on calendar icon click
        calendarIcon.addEventListener('click', function() {
            if (!calendarVisible) {
                calendarDesign.style.display = 'block'; // 달력이 숨겨져 있을 때 보이도록 변경
                selectedDateText.style.display = 'inline-block'; // 달력이 나타날 때 초기 텍스트를 보이도록 변경
                calendarVisible = true; // 달력이 보이도록 상태 변경
            } else {
                calendarDesign.style.display = 'none'; // 달력이 보이고 있을 때 숨기도록 변경
                selectedDateText.style.display = 'none'; // 달력이 숨겨질 때 텍스트도 숨김
                selectedDateText.textContent = '날짜를 선택해주세요'; // 달력이 닫힐 때 텍스트 초기화
                calendarVisible = false; // 달력이 숨겨지도록 상태 변경
            }
        });


        const currentDate = document.querySelector('.current-date');
        const months = [
            '1월', '2월', '3월', '4월', '5월', '6월', '7월',
            '8월', '9월', '10월', '11월', '12월'
        ];
        // 요일 배열 추가
        const daysOfWeek = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

        const date = new Date();
        const currYear = date.getFullYear();
        const currMonth = date.getMonth();
        currentDate.innerHTML = `${months[currMonth]} ${currYear}`;

        const currentDateElement = document.querySelector('.current-date');
        const daysElement = document.querySelector('.days');
        const prevButton = document.querySelector('.nav .material-icons:first-child');
        const nextButton = document.querySelector('.nav .material-icons:last-child');

        let currentYear = date.getFullYear();
        let currentMonth = date.getMonth();

        // 현재 날짜 출력
        updateCalendar(currentYear, currentMonth);

        // 이전 달 버튼 클릭 시 이벤트 리스너 추가
        prevButton.addEventListener('click', function(event) {
            event.stopPropagation();
            currentMonth--;
            if (currentMonth < 0) {
                currentMonth = 11;
                currentYear--;
            }
            updateCalendar(currentYear, currentMonth);
        });

        // 다음 달 버튼 클릭 시 이벤트 리스너 추가
        // 다음 달 버튼 클릭 시 이벤트 리스너 추가
        nextButton.addEventListener('click', function(event) {
            event.stopPropagation(); // 다음 버튼 클릭 시 이벤트 전파 방지
            currentMonth++;
            if (currentMonth > 11) {
                currentMonth = 0;
                currentYear++;
            }
            updateCalendar(currentYear, currentMonth);
        });


        // 달력 업데이트 함수
        function updateCalendar(year, month) {
            currentDateElement.innerHTML = `${year}년 ${months[month]}`;
            daysElement.innerHTML = '';

            // 이번 달 출력
            const firstDayOfMonth = new Date(year, month, 1).getDay();
            const totalDays = new Date(year, month + 1, 0).getDate();

            const lastDayOfPrevMonth = new Date(year, month, 0).getDate();
            for (let i = firstDayOfMonth; i > 0; i--) {
                const day = document.createElement('li');
                const prevMonthDay = lastDayOfPrevMonth - (i - 1);
                day.textContent = prevMonthDay;
                day.classList.add('inactive');
                daysElement.appendChild(day);
            }

            for (let i = 1; i <= totalDays; i++) {
                const day = document.createElement('li');
                day.textContent = i;
                if (i === date.getDate() && year === date.getFullYear() && month === date.getMonth()) {
                    day.classList.add('active'); // 현재 날짜에 해당하는 요소에 active 클래스 추가
                }
                day.addEventListener('click', function() {
                    const selectedDay = document.querySelector('.days .active');
                    if (selectedDay) {
                        selectedDay.classList.remove('active');
                    }
                    day.classList.add('active');

                    // 선택된 날짜 업데이트
                    const selectedDate = new Date(year, month, i);
                    selectedDateText.textContent = `${selectedDate.getFullYear()}-${String(selectedDate.getMonth() + 1).padStart(2, '0')}-${String(selectedDate.getDate()).padStart(2, '0')}`;
                });
                daysElement.appendChild(day);
            }
        }
    });

    // 선택된 날짜 표시 요소와 초기 값 설정
    const selectedDateText = document.getElementById('selected-date-text');
    selectedDateText.textContent = `${date.getFullYear()}-${String(date.getMonth() + 1).padStart(2, '0')}-${String(date.getDate()).padStart(2, '0')}`;
    </script>

<?php
$hostname = "localhost";
$username = "root";
$password = "tjrwls0802";
$database = "withpet";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("연결 실패: " . $conn->connect_error);
}

$selectedArea = isset($_GET['area']) ? $_GET['area'] : '';
$addressInput = isset($_GET['address']) ? $_GET['address'] : '';

$sql = ""; // SQL 쿼리 초기화
if (!empty($selectedArea) && $selectedArea != '지역구를 선택해주세요' || !empty($addressInput)) {
    $sql = "SELECT `시설명`, `카테고리1`, `카테고리2`, `카테고리3`, `시도 명칭`, `시군구 명칭`, `법정읍면동명칭`, `리 명칭`, `번지`, `도로명 이름`, `건물 번호`, `우편번호`, `도로명주소`, `지번주소`, `전화번호`, `홈페이지`, `휴무일`, `운영시간`, `주차 가능여부`, `입장(이용료)가격 정보`, `반려동물 전용 정보`, `입장 가능 동물 크기`, `반려동물 제한사항`, `장소(실내) 여부`, `장소(실외)여부`, `기본 정보_장소설명`, `애견 동반 추가 요금`, `최종작성일` FROM wpdata WHERE `시도 명칭` = '경기도' AND `카테고리2` LIKE '%의료%'";
}

if (!empty($selectedArea) && $selectedArea != '지역구를 선택해주세요') {
    // '시군구 명칭'이 정확하게 일치하도록 '=' 연산자 사용
    $sql .= " AND `시군구 명칭` = '$selectedArea'";
}

if (!empty($addressInput)) {
    $sql .= " AND `법정읍면동명칭` LIKE '%$addressInput%'";
}

// 쿼리 실행 전 쿼리 문자열이 비어있지 않은지 확인
if (!empty($sql)) {
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      echo "<table border='1'>";
      echo "<br><br><br><br><br><th>시설명</th><th>카테고리1</th><th>카테고리2</th><th>카테고리3</th><th>시도 명칭</th><th>시군구 명칭</th><th>법정읍면동명칭</th><th>리 명칭</th><th>번지</th><th>도로명 이름</th><th>건물 번호</th><th>우편번호</th><th>도로명주소</th><th>지번주소</th><th>전화번호</th><th>홈페이지</th><th>휴무일</th><th>운영시간</th><th>주차 가능여부</th><th>입장(이용료)가격 정보</th><th>반려동물 전용 정보</th><th>입장 가능 동물 크기</th><th>반려동물 제한사항</th><th>장소(실내) 여부</th><th>장소(실외)여부</th><th>기본 정보_장소설명</th><th>애견 동반 추가 요금</th><th>최종작성일</th>";
      while ($row = $result->fetch_assoc()) {
          echo "<tr>";
          foreach ($row as $value) {
              echo "<td>" . htmlspecialchars($value) . "</td>";
          }
          echo "</tr>";
      }
      echo "</table>";
  } else {
      echo "<p>검색 결과가 없습니다.</p>";
  }
} 

$conn->close();
?>





</body>
</html>