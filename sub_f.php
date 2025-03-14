<!-- 공지사항 게시만 나오는 영역 -->


</article>
</section>
  </main>

  <!-- 하단 푸터영역 -->
  <footer>
    <div class="f_inner">
      <nav>
        <dl>
          <dt><a href="#" title="미에로">미에로</a></dt>
          <dd><a href="brand.html" title="브랜드 스토리">브랜드스토리</a></dd>
          <dd><a href="#" title="식이섬유 스토리">식이섬유 스토리</a></dd>
        </dl>

        <dl>
          <dt><a href="#" title="제품소개">제품소개</a></dt>
          <dd><a href="#" title="미에로화이바">미에로화이바</a></dd>
          <dd><a href="#" title="미에로화이바 스파클링" class="spark">미에로화이바 SPARKLING ZERO SUGAR</a></dd>
          <dd><a href="#" title="헬씨올리고">헬씨올리고</a></dd>
        </dl>

        <dl>
          <dt><a href="#" title="미에로스토리">미에로스토리</a></dt>
          <dd><a href="#" title="TV광고">TV광고</a></dd>
          <dd><a href="#" title="인쇄광고">인쇄광고</a></dd>
          <dd><a href="#" title="프로모션">프로모션</a></dd>
        </dl>

        <dl>
          <dt><a href="#" title="미에로이벤트">미에로이벤트</a></dt>
          <dd><a href="#" title="http://chlghkqls123.dothome.co.kr/bbs/bbs/board.php?bo_table=mi_event">진행중인 이벤트</a></dd>
          <dd><a href="#" title="당첨자 발표">당첨자 발표</a></dd>
        </dl>

        <dl>
          <dt><a href="#" title="공지사항">공지사항</a></dt>
          <dd><a href="http://chlghkqls123.dothome.co.kr/bbs/bbs/board.php?bo_table=mi_notice" title="공지사항">New&Notice</a></dd>
        </dl>

        <dl>
          <dt><a href="#" title="현대약품">현대약품</a></dt>
        </dl>
        
        <dl class="sns">
          <dt>Connect with us</a></dt>
          <dd><a href="#" title="페이스북"><i class="fa-brands fa-facebook"></i></a></dd>
          <dd><a href="#" title="인스타"><i class="fa-brands fa-instagram"></i></a></dd>
          <dd><a href="#" title="유튜브"><i class="fa-brands fa-youtube"></i></a></dd>
        </dl>
      </nav>
    </div>
    <a href="#" title="위로 바로가기"><img src="http://chlghkqls123.dothome.co.kr/bbs/0310/images/top_up.png" alt="위로 바로가기" class="top"></a>
    <address>
      <h2>
        <a href="index.html" title="메인페이지로 바로가기">
          <img src="http://chlghkqls123.dothome.co.kr/bbs/0310/images/f_logo.png" alt="하단로고">
        </a>
      </h2>
      <p>copyright&copy; 2025 MIERO FIBER. All Rights Reserved.</p>
    </address>
    </article>
  </footer>

  <!-- 제이쿼리 라이브러리 -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <!-- 제이쿼리 wrapper -->
  <script>
    $(document).ready(function(){

      //1. 변수선언
      let mnu = $('nav.gnb > ul > li > a');

      //2. 메인메뉴 클릭시 서브메뉴 보이게, 보일때 클릭하면 숨기기
      mnu.click(function(){
        // $('.sub').slideUp(); //보이는 서브메뉴는 모두 숨기고
        // $(this).next().toggle(); 을 하면 다시 클릭시 사라지지 않음

        $(this).next().toggle().parent().siblings().find('.sub').hide(); // 선택한 a요소의 다음요소인 .sub를 나오거나 숨기게 하고 부모요소의 형제요소인 li태그의 자손인 .sub를 숨긴다.
        
        //메인을 클릭하면 서브를 숨긴다.
        $('main').click(function(){
          $('.sub').hide();
        });
      });
    });
  </script>

</body>
</html>