<div id="member_join01" class="member_w">
	<!-- 회원가입팝업 -->
	<h3 class="member_title">Plusinfra 회원가입</h3>

	<div id="member_join" class="member_pop">
		<h4 class="pop_title">회원가입</h4>
		<!-- join_input -->
		<div class="join_input">
			<ul>
				<li>
					<div class="jbox"><input type="text" id="join_input01" class="input_p02" style="width:111px"><label for="join_input01" class="">성</label></div>
					<div class="jbox ml_5"><input type="text" id="join_input02" class="input_p01" style="width:111px"><label for="join_input02" class="">이름</label></div>
					<p>성명을 정확하게 기입해주세요</p>
				</li>
				<li>
					<div class="jbox">
						<input type="text" id="join_input03" class="input_p01" style="width:256px"><label for="join_input03" class="">사용하실 ID를 입력해 주세요</label>
					</div>
				</li>
				<li>
					<div class="jbox">
						<input type="text" id="join_input04" class="input_p01" style="width:256px"><label for="join_input04" class="nlabel">사용하실 PW를 입력해주세요. <br>영문/숫자 6-20자 이내로 조합</label>
					</div>
				</li>
				<li>
					<div class="jbox">
						<input type="text" id="join_input05" class="input_p01" style="width:256px"><label for="join_input05" class="">PW를 재입력해주세요</label>
					</div>
				</li>
			</ul>
		</div>
		<!-- //join_input -->

		<div class="clause_con">
			<strong>약관내용</strong>
			<!-- check_list -->
			<div class="check_list">
				<p><input type="checkbox" id="allcheck" class=""><label for="allcheck" class="chbox">전체 이용약관 동의</label><em class="check_slide"></em></p>
				<ul>
					<li><input type="checkbox" id="clause01" name="clauseCheck"><label for="clause01" class="chbox">Plusinfra 이용약관</label> <a href="#">[바로가기]</a></li>
					<li><input type="checkbox" id="clause02" name="clauseCheck"><label for="clause02" class="chbox">전자상거래이용약관</label> <a href="#">[바로가기]</a></li>
					<li><input type="checkbox" id="clause03" name="clauseCheck"><label for="clause03" class="chbox">개인정보수집이용약관</label> <a href="#">[바로가기]</a></li>
					<li><input type="checkbox" id="clause04" name="clauseCheck"><label for="clause04" class="chbox">개인정보3자(판매자)제공동의</label> <a href="#">[바로가기]</a></li>
					<li><input type="checkbox" id="clause05" name="clauseCheck"><label for="clause05" class="chbox">개인정보수집 및 이용동의</label> <a href="#">[바로가기]</a></li>
					<li><input type="checkbox" id="clause06" name="clauseCheck"><label for="clause06" class="chbox">위치정보이용약관</label> <a href="#">[바로가기]</a></li>
					<li><input type="checkbox" id="clause07" name="clauseCheck"><label for="clause07" class="chbox">이벤트/쇼핑정보 SMS수신동의</label> <a href="#">[바로가기]</a></li>
					<li><input type="checkbox" id="clause08" name="clauseCheck"><label for="clause08" class="chbox">이벤트/쇼핑정보 이벤트수신</label> <a href="#">[바로가기]</a></li>
				</ul>
			</div>
			<!-- //check_list -->
		</div>
		<!-- //clause_con -->

		<!-- join_btn -->
		<div class="join_btn ta_c">
			<a href="javascript:;" class="button_b blue join_part02" style="width:280px;">회원가입</a>
		</div>
		<!-- //join_btn -->

		<!-- join_pager -->
		<div class="join_pager">
			<img src="/alba/img/ico/ico_join01.png" alt="회원가입 첫번째페이지">
		</div>
		<!-- //join_pager -->
	</div>
	<!-- //회원가입팝업 -->

</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('.jbox input').focus(function(){
			$(this).next('label').hide();
		}).blur(function(){
			$(this).next('label').show();
		});
		$("#allcheck").click(function(){
	        //클릭되었으면
	        if($("#allcheck").prop("checked")){
	            //input태그의 name이 chk인 태그들을 찾아서 checked옵션을 true로 정의
	            $("input[name=clauseCheck]").prop("checked",true);
	            //클릭이 안되있으면
	        }else{
	            //input태그의 name이 chk인 태그들을 찾아서 checked옵션을 false로 정의
	            $("input[name=clauseCheck]").prop("checked",false);
	        }
	   	 });
		$('.check_slide').click(function(){
			$('.check_list p').toggleClass('open');
			$('.check_list ul').slideToggle();
		});
	});
</script>
