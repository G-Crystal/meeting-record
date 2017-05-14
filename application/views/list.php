<div class="form-group">
	<a href="<?php echo site_url('home/add'); ?>" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> 추가</a>
	<?php echo $total_count; ?>
</div>

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
			<tr>
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
				<td colspan="10">검색결과가 없습니다.</td>
			</tr>
		<?php endif; ?>
		</tbody>
	</table>
</div>