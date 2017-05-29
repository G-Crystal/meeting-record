<?php $lastnum = ceil($total_count / $limit); ?>
<?php $limits = array(5, 10, 25, 50, 100); ?>

<form id="aForm" method="post" action="<?php echo site_url('home/getList'); ?>">
	<input type="hidden" name="lastnum" id="lastnum" value="<?php echo $lastnum; ?>">
	<div class="row">
		<div class="form-group col-sm-2 col-xs-12">
			<a href="<?php echo site_url('home/add'); ?>" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> 추가</a>
		</div>
		<div class="form-group col-sm-8 col-xs-12">
		    <div class="input-group">
				<input type="text" name="search_key" id="search_key" class="form-control" placeholder="검색문자렬을 입력하십시오." value="<?php echo $search_key; ?>">
				<span class="input-group-btn">
					<button class="btn btn-default" type="button" id="search"><i class="fa fa-search" aria-hidden="true"></i></button>
				</span>
	    	</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 text-right">
			<div class="cell-div">
				<a href="#" id="view_first"><i class="fa fa-fast-backward" aria-hidden="true"></i></a>
				<a href="#" id="view_prev"><i class="fa fa-backward" aria-hidden="true"></i></a>
				<input type="text" name="pagenum" id="pagenum" class="pagination-control" value="<?php echo $pagenum; ?>"> / <?php echo $lastnum; ?>
				<a href="#" id="view_next"><i class="fa fa-forward" aria-hidden="true"></i></a>
				<a href="#" id="view_last"><i class="fa fa-fast-forward" aria-hidden="true"></i></a>
			</div>
			<div class="cell-div">
				<span>현시행수 : </span>
				<select name="limit" id="limit" class="pagination-select-control">
					<?php foreach ($limits as $val): ?>
					<option value="<?php echo $val; ?>" <?php echo ($limit == $val) ? 'selected' : ''; ?> ><?php echo $val; ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="cell-div">
				<span>검색결과 : </span>
				<input type="text" class="pagination-control" value="<?php echo $total_count; ?>" readonly>
			</div>
		</div>
	</div>
</form>
<form id="editForm" method="post" action="<?php echo site_url('home/edit'); ?>">
	<input type="hidden" name="ref_index" id="ref_index" value="<?php echo $ref_index; ?>">
</form>

<div class="table table-responsive table-striped table-b">
	<table class="table table-responsive table-striped table-hover table-shadow">
		<thead>
			<tr>
				<td>번호</td>
				<td>이름</td>
				<td>과제명</td>
				<td>대방이름</td>
				<td>성별</td>
				<td>나라</td>
				<td>면담날자/시간</td>
				<td>면담내용</td>
				<td class="hidden-xs">주의사항</td>
			</tr>
		</thead>
		<tbody>
		<?php if ($total_count > 0): ?>
			<?php $index = 1; ?>
			<?php foreach ($results as $row): ?>
			<tr class="editable-row" ref="<?php echo $row['id']; ?>">
				<td><?php echo $index++; ?></td>
				<td><?php echo $row['user_name']; ?></td>
				<td><?php echo $row['task_name']; ?></td>
				<td><?php echo $row['client_name']; ?></td>
				<td><?php echo ($row['gender'] == 1) ? "남자" : "녀자"; ?></td>
				<td><?php echo $row['country']; ?></td>
				<td><?php echo $row['dtime']; ?></td>
				<td><?php echo $row['contents']; ?></td>
				<td class="hidden-xs"><?php echo $row['note']; ?></td>
			</tr>
			<?php endforeach; ?>
		<?php else: ?>
			<tr>
				<td colspan="10" class="text-center">검색결과가 없습니다.</td>
			</tr>
		<?php endif; ?>
		</tbody>
	</table>
</div>