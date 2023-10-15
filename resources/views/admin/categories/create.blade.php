<x-admin-layout>
	<x-slot name="header">
	</x-slot>

	<div>
		<div>
			<div>
				<div>
					<a href="{{  route('admin.categories.index') }}">See All Categories</a>
				</div>
				<div>
					<div>
						<form method="POST" action="{{  route('admin.categories.store') }}" enctype="multipart/form-data">
							@csrf
							<div>
								<label for="name">Category Title</label>
								<div>
									<input type="text" id="name"  name="name"/>
								</div>
							</div>
							<div>                
								<button type="submit">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div
	</div>
</x-admin-layout>
