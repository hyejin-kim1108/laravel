라라벨(Laravel) - 개인 프로젝트 
==================

> ## 목적
  * 라라벨 CRUD 적용
  * Auth를 중점적으로 이용한 프로젝트
  * 앞으로도 지속적인 개발, 

> ## 개발환경
  * Front-End
    + Html
    + TailWind

  * Back-End
    + PHP 7.4.2
    + LARAVEL 6.x
    + MySQL 6 

***

> ## 기본지식 수립 (2/23~2/29)
 * 라라벨로 배우는 실전 PHP 웹 프로그래밍 책 1회독 
    -> _얻은 것 : MVC모델 처리과정 이해, HTTP전송방법 이해_ 
 
> ## 회원관리 (3/2 ~ 3/17)

 * 가입 (3/2~3/5)
    + 3/2 - 회원가입 폼(블레이드) 작성, 모델(App/User) 데이터베이스 create 문 작성, 마이그레이션(Migration) 작성   
    + 3/3 - DB에 회원정보 입력, 아이디&이메일 중복유저 검사, 입력값 빈칸 확인(Validate 활용)
    + 3/4 - 컨트롤러 수정, 회원가입 라우트 작성 
    + 3/5 - SweetAlter 라이브러리, barrydh 디버거바 사용, 컨트롤러 간결하게 수정, 모델 데이터타입 일부 수정 

 * 로그인 초기 폼 작성 (3/6~3/7)
    + 3/6 - 로그인 폼(블레이드) 작성, 로그인 라우트 작성 
    + 3/7 - 마이그레이션(Migration) 작성, 입력값 빈칸 확인(Validate 활용) 
    
 * Auth (3/8~3/14)
    + 3/8~3/13 - Auth 개념 숙지, 활용 
    + 3/14 - 로그인 Auth 작성 
 
 * 로그인 (3/15~3/16)
    + 3/15 - 로그인 컨트롤러 작성, 마이그레이션(Migration) 수정, 입력값과 DB의 입력값 확인, DB에 회원정보 입력, 아이디&이메일 중복유저 검사, 입력값 빈칸 확인(Validate 활용)
    + 3/16 - 로그아웃 폼(블레이드) 작성, 로그아웃 컨트롤러 작성, 세션 삭제, Auth::check를 활용한 유저접근권한 수정, 라우트 수정,
             회원탈퇴 폼(블레이드) 작성, 회원탈퇴 컨
> ## 게시판 
 * 게시판 (3/17~3/25)
    + 3/17 - Tailwind css 게시판 쪽에 적용, Auth 활용한 유저의 별명, 이메일 불러오기, 리스트 컨트롤러, 라우트 수정.
    + 3/18 - 파일 업로드 MVC 초기수정
    + 3/19~3/23 - 파일 업로드 완료. DB저장 완료. 
    + 3/25 - 모델,컨트롤러 수정 
    + 3/26 - 회원가입,로그인 관련 Auth 수정 
    
> 사용 예시 
 * 로그인 관련 
    + 로그인 완료, 아이디,이메일 중복확인  
        ![join_check](https://user-images.githubusercontent.com/58838657/77294761-24b23680-6d28-11ea-84f9-f0709bfe31d8.gif)
    + 빈칸확인
        ![join_empty_suc](https://user-images.githubusercontent.com/58838657/77294764-25e36380-6d28-11ea-8992-ed809c99ab27.gif)
    + 로그인 빈칸확인
        ![login_check](https://user-images.githubusercontent.com/58838657/77294768-25e36380-6d28-11ea-9aef-de91d2ad26d6.gif)
    + 로그인 완료
        ![login_suc_logou](https://user-images.githubusercontent.com/58838657/77294772-27149080-6d28-11ea-900c-6e6e5f6b81ba.gif)
    + 파일 업로드 완료
        ![file_upload](https://user-images.githubusercontent.com/58838657/77294661-03514a80-6d28-11ea-8ae6-d345726020d1.gif)