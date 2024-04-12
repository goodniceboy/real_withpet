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
  <style>
.result-container {
  background-color: #fff; /* 하얀색 바탕 설정 */
  padding: 10px; /* 내부 여백 설정 */
  margin-top: 20px; /* 위쪽 여백 설정 */
  width: 100%; /* 폭 설정 */
  box-sizing: border-box; /* 패딩과 보더를 포함한 총 크기 설정 */
  overflow: auto; /* 내용이 넘칠 경우 스크롤바 생성 */
  border: 1px solid #ccc; /* 경계선 추가 (선택적) */
}
</style>

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
                </div>
                <p>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</p>
              </div>
            </nav>
          </div>
        </header>
        <!--welcome-hero start -->
      <section id="home" class="slider_section">
         <div class="container">
            <div class="welcome-hero-txt">
            </div>
            <div class="welcome-hero-serch-box">
              <form action="cafename-search.php" method="get" class="welcome-hero-form">
                  <div class="single-welcome-hero-form">
                      <img src="images/search-icon.png" alt="돋보기" width="25" height="25">
                      <input type="text" name="query" placeholder="반려동물과 함께 가고싶은 곳을 검색해 보세요">
                      <button type="submit" class="welcome-hero-btn">
                          search <i data-feather="search"></i>
                      </button>
                  </div>
              </form>
          </div>
          <div class="result-container"> <!-- 결과를 감싸는 div -->
          <?php
// 데이터베이스 연결 설정
$host = "localhost";
$username = "root";
$password = "tjrwls0802";
$dbname = "withpet";

// MySQL 데이터베이스 연결
$conn = new mysqli($host, $username, $password, $dbname);

// 연결 오류 확인
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 검색어 가져오기
if(isset($_GET['query'])) {
    $searchTerm = trim($_GET['query']); // 공백 제거

    // 검색어가 비어있는지 확인
    if(empty($searchTerm)) {
        echo "<p>검색 조건을 입력하세요.</p>";
    } else {
        // SQL 쿼리 작성
        $sql = "SELECT `시설명`, `카테고리1`, `카테고리2`, `카테고리3`, `시도 명칭`, `시군구 명칭`, `법정읍면동명칭`, `리 명칭`, `번지`, `도로명 이름`, `건물 번호`, `우편번호`, `도로명주소`, `지번주소`, `전화번호`, `홈페이지`, `휴무일`, `운영시간`, `주차 가능여부`, `입장(이용료)가격 정보`, `반려동물 전용 정보`, `입장 가능 동물 크기`, `반려동물 제한사항`, `장소(실내) 여부`, `장소(실외)여부`, `기본 정보_장소설명`, `애견 동반 추가 요금`, `최종작성일` FROM wpdata WHERE 시설명 LIKE '%$searchTerm%' AND 카테고리2 LIKE '%여행%'";

        // 쿼리 실행
        $result = $conn->query($sql);

        // 결과 출력
        if ($result->num_rows > 0) {
            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>시설명</th><th>카테고리1</th><th>카테고리2</th><th>카테고리3</th><th>시도 명칭</th><th>시군구 명칭</th><th>법정읍면동명칭</th><th>리 명칭</th><th>번지</th><th>도로명 이름</th><th>건물 번호</th><th>우편번호</th><th>도로명주소</th><th>지번주소</th><th>전화번호</th><th>홈페이지</th><th>휴무일</th><th>운영시간</th><th>주차 가능여부</th><th>입장(이용료)가격 정보</th><th>반려동물 전용 정보</th><th>입장 가능 동물 크기</th><th>반려동물 제한사항</th><th>장소(실내) 여부</th><th>장소(실외)여부</th><th>기본 정보_장소설명</th><th>애견 동반 추가 요금</th><th>최종작성일</th>";
            echo "</tr>";

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
}

// 연결 종료
$conn->close();
?>

          </div> <!-- 결과를 감싸는 div 종료 -->
            </div>
        </section>
    </div>
</body>
</html>
