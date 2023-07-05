<style>
.submn {width:100%; margin:0 auto;}
.submn .liback {background: #587EF6;}
.submn .liback .wordtit {color:#fff !important;}
.submn ul li {width:31%; height: 40px; border:1px solid #ddd; float:left; padding: 5px; margin-left:6px; margin-top: 5px; font-size:1.0em;}
.submn ul li p {text-align: center; margin-top: 5px;}
</style>
<section class="ps14A">
    <article class="artcleViewR">
		<!-- 슬라이드 배너 -->
		<div class="slide_banner">
<?php
// 시민서브배너 (사이드 2개)
if (count($rowSubBannerSide) > 0)
{
	$k = 0;
	foreach ($rowSubBannerSide as $field) 
	{
		$tmp_class = "";
		if ($k == 0) {
			$tmp_class = "left_banner";
			$tmp_style = "float:left;";
		}
		else {
			$tmp_class = "right_banner";
			$tmp_style = "float:right;";
		}
?>	
				<div class="<?php echo $tmp_class; ?>" style="top:0px;">
					<div class="banner_wrap" style="<?php echo $tmp_style;?>">
						<a href="<?php echo $field->bn_linkurl?>" target="<?php echo $field->bn_linktarget?>">
							<img src="https://simintvimg.net/resource/upload/subbanner/<?php echo $field->bn_fname?>" width='160' height='600'>
						</a>
					</div>	
				</div>
<?php
		$k++;
	}
}
?>		
		</div>
		<!-- 슬라이드 배너 -->
		<div class="bann_R">
			<div class="repo-inqu">
				<img src="/resource/img/serchart.png">
			</div>
			<div class="reposerchlist">
				<div class="repos_A">
					<ul>
						<li><span>기자검색</span></li>
						<li><input type="text" id="repswrd" name="repswrd" value="<?php echo $repswrd; ?>" placeholder="기자명을 입력하세요."></li>
						<li><button type="button" class="btn btn-primary repos_ser btnRepSearch">검색</button></li>
					</ul>
				</div>
			</div>
			<div class="submn">
				<ul>
					<li>
						<p><a href="/Information/Reporter/reporterList/0">전체</a></p>
					</li>
					<li>
						<p><a href="/Information/Reporter/reporterList/1">총재</a></p>
					</li>
					<li>
						<p><a href="/Information/Reporter/reporterList/2">총괄회장/대표이사</a></p>
					</li>
					<li>
						<p><a href="/Information/Reporter/reporterList/3">공동회장</a></p>
					</li>
					<li>
						<p><a href="/Information/Reporter/reporterList/4">총괄부회장</a></p>
					</li>
					<li>
						<p><a href="/Information/Reporter/reporterList/5">부회장</a></p>
					</li>
					<li>
						<p><a href="/Information/Reporter/reporterList/6">해외대표</a></p>
					</li>
					<li>
						<p><a href="/Information/Reporter/reporterList/7">본부장</a></p>
					</li>
					<li>
						<p><a href="/Information/Reporter/reporterList/8">부사장</a></p>
                    </li>
					<li>
						<p><a href="/Information/Reporter/reporterList/9">고문</a></p>
					</li>
					<li>
						<p><a href="/Information/Reporter/reporterList/10">자문위원</a></p>
					</li>
					<li>
						<p><a href="/Information/Reporter/reporterList/11">논설위원</a></p>
					</li>
					<li>
						<p><a href="/Information/Reporter/reporterList/12">기자</a></p>
					</li>
					<li>
						<p><a href="/Information/Reporter/reporterList/13">사장</a></p>
					</li>
				</ul>
			</div>

			<div class="artcleListViewA">
				<form id="frm" name="frm" method="post">
					<input type="hidden" id="hidRepIdx" name="hidRepIdx">
					<input type="hidden" id="position" name="position" value="<?php echo $position; ?>">
				</form>
				<table class="presslistview rep">
					<colgroup>
						<col width="30%">
						<col width="80%">
					</colgroup>
					<thead>
						<tr>
							<th>기자증</th>
							<th colspan="3">정보</th>
						</tr>
					</thead>	
<?php
if ($totalcount == 0)
{
?>
					<tr class="pressserviewC">
						<td colspan="5" name="art_bar"><i class="fas fa-search"></i> 기자를 찾을 수 없습니다.</td>
					</tr>
				</table>
			</div>
<?php
}
else
{
	foreach($rowList as $field) 
	{
		$tmp_photo = "";
		$tmp_img = "pressB.png";
		
		if (!empty($field->m_photo_fname))
		{
			$tmp_photo = "<img src=\"https://simintvimg.net/resource/upload/photo/". $field->m_photo_fname ."\" class=\"pressphotoV\" style=\"width:60px; height:80px; margin-top: -15px;\">";
		}
		
		if ($field->m_reporter_class == 1) {
			$tmp_img = "pressA.png";
		}else if ($field->m_reporter_class == 2){
            $tmp_img = "pressB.png";
        }else if ($field->m_reporter_class == 3){
            $tmp_img = "pressC.png";
        }else{
            $tmp_img = "pressB.png";
        }		
?>



					<tr class="pressserview">
						<td>
							<a href="javascript:void(0);" class="btnRep" data-repidx="<?php echo $field->m_idx; ?>">
								<img src="/resource/img/<?php echo $tmp_img; ?>" style="width:150px; height:250px;">
								<span class="pressphotoV repphoto" style="position:relative; left: 15px;"><?php echo $tmp_photo; ?></span>
								<span class="nameA repname" style="position:relative; left: -15px; top: 48px;"><?php echo $field->m_username; ?></span>
							</a>
						</td>
						<td colspan="3">
							<table class="artticleinfomation">
								<colgroup>
									<col width="300px;">
									<col width="600px">
								</colgroup>
								<tbody>
									<tr>
										<th>이름</th>
										<td><?php echo $field->m_username; ?></td>
									</tr>
									<tr>
										<th>발령처</th>
										<td><?php echo $field->bo_name; ?></td>
									</tr>
									<tr>
										<th>발령일</th>
										<td><?php echo $field->m_regdate; ?></td>
									</tr>
									<tr>
										<th>직책</th>
										<td><?php echo $field->m_position; ?></td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
<?php	
	}
?>
				</table>
			</div>
<?php
	if ($searchflag)
	{
		echo("
				<div class='list_home'>
	        		<p><a href='{$path}' class='btn_list'>목록으로</a></p>
	    		</div>
		");
	}
?>
			
            <div class="paging" style="margin: 40px 0 20px 0;">
<?php
	echo $this->paginglist->page_list($totalcount, $page, $pagesize, $path, 2, $tail); 
?>
            </div>
            
<?php
}
?>
		</div>			
	</article>
</section>
<script>
$(function(){
	var idx = parseInt($("#position").val());
	$(".submn ul > li").removeClass("liback");
	$(".submn ul > li").removeClass("wordtit");
	$(".submn ul > li").eq(idx).addClass("liback");
	$(".submn ul > li").eq(idx).find("a").addClass("wordtit");
	
		
	$(".btnRepSearch").on("click", function(){
		var repswrd = $("#repswrd").val();
		if (repswrd == '') {
			alert('검색어를 입력해 주세요.');
			return false;
		}
		else {
			$(location).attr("href", "/Information/Reporter/reporterList/0/1?sar=&repswrd=" + encodeURIComponent(repswrd));
		}
	});
	
	$(".rep").on("click", ".btnRep", function(e){
		e.preventDefault();
		$("#hidRepIdx").val($(this).data("repidx"));
		$("#frm").attr("action", "/Information/Reporter/reporterInfo").submit();
	});
	
	$('#repswrd').keypress(function(event){
		if(event.which == 13)
		{
			$('.btnRepSearch').click();
			return false;
		}
	});
});
</script>