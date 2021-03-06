<?php if(isset($result)): ?>
<?php if($result): ?>
	<div class="alert alert-success">
		자료를 <strong>성과</strong>적으로 추가하였습니다.
	</div>
<?php else: ?>
	<div class="alert alert-danger">
		자료추가에서 <strong>실패</strong>하였습니다.
	</div>
<?php endif; ?>
<?php endif; ?>

<form id="addForm" method="post" action="addPost">
	<div class="form-group row">
		<div class="col-md-2 col-sm-4 col-xs-12 required">이름</div>
		<div class="col-md-10 col-sm-8 col-xs-12"><input type="input" name="user_name" id="user_name" class="form-control input-control" required /></div>
	</div>

	<div class="form-group row">
		<div class="col-md-2 col-sm-4 col-xs-12 required">과제명</div>
		<div class="col-md-10 col-sm-8 col-xs-12"><input type="input" name="task_name" id="task_name" class="form-control input-control" required /></div>
	</div>

	<div class="form-group row">
		<div class="col-md-2 col-sm-4 col-xs-12 required">대방이름</div>
		<div class="col-md-10 col-sm-8 col-xs-12"><input type="input" name="client_name" id="client_name" class="form-control input-control" required /></div>
	</div>

	<div class="form-group row">
		<div class="col-md-2 col-sm-4 col-xs-12">성별</div>
		<div class="col-md-10 col-sm-8 col-xs-12">
			<select name="gender" id="gender" class="form-control input-control">
				<option value="1">남자</option>
				<option value="0">녀자</option>
			</select>
		</div>
	</div>

	<div class="form-group row">
		<div class="col-md-2 col-sm-4 col-xs-12">나라</div>
		<div class="col-md-10 col-sm-8 col-xs-12">
			<select name="country" id="country" class="form-control input-control">
			<?php foreach($countries as $key => $value): ?>
				<option value="<?= $value ?>" title="<?= htmlspecialchars($value) ?>"><?= htmlspecialchars($value) ?></option>
			<?php endforeach; ?>
			</select>
		</div>
	</div>

	<div class="form-group row">
		<div class="col-md-2 col-sm-4 col-xs-12 required">면담날자/시간</div>
		<div class="col-md-10 col-sm-8 col-xs-12">
            <div class='input-group datetime-control date' name='dtime' id='dtime'>
                <input type='text' class="form-control input-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
	</div>

	<div class="form-group row">
		<div class="col-md-2 col-sm-4 col-xs-12 required">면담내용</div>
		<div class="col-md-10 col-sm-8 col-xs-12"><textarea name="contents" id="contents" class="form-control" required></textarea></div>
	</div>

	<div class="form-group row">
		<div class="col-md-2 col-sm-4 col-xs-12">주의사항</div>
		<div class="col-md-10 col-sm-8 col-xs-12"><textarea name="note" id="note" class="form-control"></textarea></div>
	</div>

	<div class="form-group row text-center">
	    <input type="submit" name="submit" value="보관" class="btn btn-success" />
	    <input type="reset" name="reset" value="재설정" class="btn btn-warning" />
		<a href="<?php echo site_url('home'); ?>" class="btn btn-primary"><i class="fa fa-hand-o-left" aria-hidden="true"></i> 뒤로</a>
	</div>
</form>