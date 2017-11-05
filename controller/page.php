<style type="text/css">
.div_phan_trang
{
	width:100%;
	text-align:center;

	margin:auto;
	
}
.div_trang
{
	padding:10px;
	border:1px solid rgba(168, 184, 237,1);
	margin-left:10px;
	border-radius:5px;

	
}
.div_trang:hover{
	background-color:rgb(184, 173, 198);
	color:white;
	transition:all 0.4s;	
}
.div_trang a
{
	
	text-decoration:none;
	font-size:20px;
	color:black;	
}
</style>
  <?php
class pager
{
	function findStart($limit)
	{
		if ((!isset($_GET['page'])) || ($_GET['page'] == "1"))
		{
			$start = 0;
			$_GET['page'] = 1;
		}
		else
		{
			$start = ($_GET['page']-1) * $limit;
		}
		
		return $start;
	}
	function findPages($count, $limit)
	{
		$pages = (($count % $limit) == 0) ? $count / $limit : floor($count / $limit) + 1;
		return $pages;
	}

	

	function pageList($curpage, $pages,$option="")
	{
		$page_list="";
			if(($curpage!=1)&&($curpage))
			{
				$page_list.='<span class="div_trang">'."<a href =\"".$_SERVER['PHP_SELF']."?page=1$option\" title=\"Trang đầu\"><<</a></span>";
			}
			if(($curpage-1)>0)
			{
				$page_list.='<span class="div_trang">'."<a href =\"".$_SERVER['PHP_SELF']."?page=".($curpage-1)."$option\" title=\"Về trang trước\"><</a></span>";
			}
			/*if($curpage>2)
				$page_list.="...";*/
			$vtdau=max($curpage-2,1);
			$vtcuoi=min($curpage+2,$pages);
			
				for($i=$vtdau;$i<=$vtcuoi;$i++)
				{
					if($i==$curpage)
					{
						$page_list.='<span class="div_trang">'."<b>".$i."</b></span>";
					}
					else
					{
						$page_list.='<span class="div_trang">'."<a href ='".$_SERVER['PHP_SELF']."?page=".$i."$option' title='Trang ".$i."'>".$i."</a></span>";
					}
				}

			/*if(($curpage+2)<$pages)
				$page_list.="...";*/

			
			if(($curpage+1)<=$pages)
			{
				$page_list.='<span class="div_trang">'."<a href =\"".$_SERVER['PHP_SELF']."?page=".($curpage+1)."$option\" title=\"Đến trang sau\">></a></span>";
				$page_list.='<span class="div_trang">'."<a href =\"".$_SERVER['PHP_SELF']."?page=".$pages."$option\" title=\"Đến trang cuối\">>></a></span>";
			}
			return $page_list;
	}

	function nextPrev($curpage,$pages)//chỉ hiển thị 2 nút Truoc và Sau
		{
			$next_prev="";
			if(($curpage-1)<=0)
			{
				$next_prev.="Về trang trước";
			}
			else
			{
				$next_prev.="<a href =\"".$_SERVER['PHP_SELF']."?page=".($curpage-1)."\">Về trang trước</a>";
			}
			$next_prev.=" | ";
			if(($curpage+1)>$pages)
			{
				$next_prev.="Đến trang sau";
			}
			else
			{
				$next_prev.="<a href =\"".$_SERVER['PHP_SELF']."?page=".($curpage+1)."\">Đến trang sau</a>";
			}
			return $next_prev;
		}
}
?>