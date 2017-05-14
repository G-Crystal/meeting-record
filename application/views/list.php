<div class="form-group">
	<a href="<?php echo site_url('home/add'); ?>" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> 추가</a>
</div>

<div class="table table-responsive table-striped">
	<div class="table-row table-header">
		<div class="table-cell">번호</div>
		<div class="table-cell">이름</div>
		<div class="table-cell">과제명</div>
		<div class="table-cell">대방이름</div>
		<div class="table-cell">성별</div>
		<div class="table-cell">나라</div>
		<div class="table-cell">면담날자/시간</div>
		<div class="table-cell">면담내용</div>
		<div class="table-cell">주의사항</div>
	</div>
	<div class="table-row">
		<div class="table-cell">번호</div>
		<div class="table-cell">이름</div>
		<div class="table-cell">과제명</div>
		<div class="table-cell">대방이름</div>
		<div class="table-cell">성별</div>
		<div class="table-cell">나라</div>
		<div class="table-cell">면담날자/시간</div>
		<div class="table-cell">면담내용</div>
		<div class="table-cell">주의사항</div>
	</div>
	<div class="table-row">
		<div class="table-cell">번호</div>
		<div class="table-cell">이름</div>
		<div class="table-cell">과제명</div>
		<div class="table-cell">대방이름</div>
		<div class="table-cell">성별</div>
		<div class="table-cell">나라</div>
		<div class="table-cell">면담날자/시간</div>
		<div class="table-cell">면담내용</div>
		<div class="table-cell">주의사항</div>
	</div>
	<div class="table-row">
		<div class="table-cell">번호</div>
		<div class="table-cell">이름</div>
		<div class="table-cell">과제명</div>
		<div class="table-cell">대방이름</div>
		<div class="table-cell">성별</div>
		<div class="table-cell">나라</div>
		<div class="table-cell">면담날자/시간</div>
		<div class="table-cell">면담내용</div>
		<div class="table-cell">주의사항</div>
	</div>

	<?php if (count($results) > 0): ?>
		<?php $index = 1; ?>
		<?php foreach ($results as $row): ?>
		<div class="table-row">
			<div class="table-cell"><?php echo $index++; ?></div>
			<div class="table-cell"><?php echo $row['user_name']; ?></div>
			<div class="table-cell"><?php echo $row['task_name']; ?></div>
			<div class="table-cell"><?php echo $row['client_name']; ?></div>
			<div class="table-cell"><?php echo $row['gender']; ?></div>
			<div class="table-cell"><?php echo $row['country']; ?></div>
			<div class="table-cell"><?php echo $row['dtime']; ?></div>
			<div class="table-cell"><?php echo $row['contents']; ?></div>
			<div class="table-cell"><?php echo $row['note']; ?></div>
		</div>
		<?php endforeach; ?>
	<?php else: ?>
		<code>Sorry, there is no record.</code>
	<?php endif; ?>
</div>