<div class="bg-white border-bottom rounded-1 mt-3">
	<div class="pt-4 px-4">
		<div role="alert" class="alert alert-warning py-2 fs-8 m-0">
			<i class="fas fa-exclamation-circle"></i>
			<span class="px-2">
				Before adding a new enhancement, ensure that it is created in English.
			</span>
		</div>
	</div>
	<div class="p-4">
		<div class="pb-3">
			<div class="row g-3">
				<div class="col-12 col-md-6 col-lg-4">
					<div class="position-relative">
						<button class="btn border w-100 rounded-0 d-flex p-0" data-bs-toggle="dropdown" aria-expanded="false">
							<div class="py-2 px-3 w-100 fs-8 fw-bold text-dark">
								English
							</div>
							<div class="py-2 px-3 bg-light border-start">
								<i class="fas fa-language"></i>
							</div>
						</button>
						<ul class="dropdown-menu rounded-0 w-100 fs-7" style="">
							<li><a class="dropdown-item" href="javascript:void(0);">English</a></li>
							<li><a class="dropdown-item" href="javascript:void(0);">Bahasa Indonesia</a></li>
							<li><a class="dropdown-item" href="javascript:void(0);">ภาษาไทย</a></li>
							<li><a class="dropdown-item" href="javascript:void(0);">日本語</a></li>
							<li><a class="dropdown-item" href="javascript:void(0);">简体中文</a></li>
						</ul>
					</div>
				</div>
				<div class="col-12 col-lg-8">
					<div class="input-group">
						<span class="input-group-text rounded-0 py-2 fs-7 fw-bold text-dark d-none d-md-block">
							Enhancement name
						</span>
						<input type="text" class="form-control fs-6 rounded-0 py-2 text-dark" placeholder="Enhancement name">
					</div>
				</div>
			</div>
		</div>
		<div>
			<div class="bg-light border-top border-start border-end p-2">
				<div class="row g-2">
					<div class="col-auto">
						<div class="d-flex">
							<button class="btn bg-white border w-100 rounded-0 py-1 px-3">
								<span class="fs-9 text-dark"><i class="fas fa-undo"></i></span>
							</button>
							<button class="btn bg-white border w-100 rounded-0 py-1 px-3">
								<span class="fs-9 text-dark"><i class="fas fa-redo"></i></span>
							</button>
						</div>
					</div>
					<div class="col-auto">
						<div class="d-flex">
							<button class="btn bg-white border w-100 rounded-0 py-1 px-3">
								<span class="fs-9 text-dark"><i class="fas fa-bold"></i></span>
							</button>
							<button class="btn bg-white border w-100 rounded-0 py-1 px-3">
								<span class="fs-9 text-dark"><i class="fas fa-italic"></i></span>
							</button>
							<button class="btn bg-white border w-100 rounded-0 py-1 px-3">
								<span class="fs-9 text-dark"><i class="fas fa-underline"></i></span>
							</button>
							<button class="btn bg-white border w-100 rounded-0 py-1 px-3">
								<span class="fs-9 text-dark"><i class="fas fa-strikethrough"></i></span>
							</button>
						</div>
					</div>
					<div class="col-auto">
						<div class="d-flex">
							<button class="btn bg-white border w-100 rounded-0 py-1 px-3">
								<span class="fs-9 text-dark"><i class="fas fa-list-ul"></i></span>
							</button>
							<button class="btn bg-white border w-100 rounded-0 py-1 px-3">
								<span class="fs-9 text-dark"><i class="fas fa-list-ol"></i></span>
							</button>
						</div>
					</div>
				</div>
			</div>
			<div>
				<textarea class="form-control rounded-0 w-100 fs-7 p-3" cols="30" rows="10" placeholder="Enhancement description"></textarea>
			</div>
		</div>
	</div>
</div>

<div class="bg-white border-bottom rounded-1 mt-3">
	<div class="pt-4 px-4">
		<div role="alert" class="alert alert-warning py-2 fs-8 m-0">
			<i class="fas fa-exclamation-circle"></i>
			<span class="px-2">
				set time
			</span>
		</div>
	</div>
	<div class="p-4">
			From date
			13-Jan-23
			To date
			31-Jan-23
			Cost
			850.00
			Sequence number
	</div>
</div>


<div class="py-4">
	<div class="row justify-content-between">
		<div class="col-auto">
			<button
				class="btn btn-secondary rounded-0 py-2 fs-8 text-white"
				onclick="window.open('/enhancement/','_self');">
				<span><i class="fas fa-undo"></i></span>
				<span class="px-2">Back</span>
			</button>
		</div>
		<div class="col-auto">
			<div class="row g-2 justify-content-end">
				<div class="col-auto">
					<button
						class="btn btn-secondary rounded-0 py-2 fs-8 text-white"
						onclick="window.open('/enhancement/','_self');">
						<span class="px-2">Cancel</span>
					</button>
				</div>
				<div class="col-auto">
					<button
						class="btn btn-success rounded-0 py-2 fs-8 text-white"
						onclick="window.open('/enhancement/?page=edit-enhancement','_self');">
						<span class="px-4">Save</span>
					</button>
				</div>
			</div>
		</div>
	</div>
</div>

