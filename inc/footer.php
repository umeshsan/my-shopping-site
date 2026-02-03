</div>
<!-- smooth-content -->
</div>
<!-- smooth-wrapper -->

<script src="dist/js/jquery.min.js"></script>
<script src="dist/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/swiper-bundle.min.js"></script>
<script src="dist/js/fancybox.min.js"></script>
<script src="dist/js/aos.min.js"></script>
<script src="dist/js/jquery.matchHeight-min.js"></script>

<!-- GSAP core -->
<script src="dist/js/gsap.min.js"></script>

<!-- ScrollTrigger (required by ScrollSmoother) -->
<script src="dist/js/ScrollTrigger.min.js"></script>

<!-- ScrollSmoother plugin -->
<script src="dist/js/ScrollSmoother.min.js"></script>

<!-- Scrollreveal plugin -->
<script src="dist/js/scrollreveal.min.js"></script>

<!-- Custom -->
<script src="dist/js/custom.js"></script>

<script>
  function toggleDiv() {
	const box = document.getElementById("toggleBox");
	box.style.display = box.style.display === "none" ? "block" : "none";
}
</script>

<script>
	class ImageUploader {
	  constructor(wrapper) {
		this.wrapper = wrapper;
		this.contextWrapper = wrapper.closest('.image-search-context-wrapper');
		this.input = wrapper.querySelector('input[type="file"]');
		this.preview = wrapper.querySelector('.image-preview');
		this.button = wrapper.querySelector('.upload-btn');
		this.closeBtn = wrapper.querySelector('.image-upload-close');

		this.init();
	}

	init() {
	// Click upload button
		this.button.addEventListener('click', () => this.input.click());

	// File select
		this.input.addEventListener('change', () => {
		  if (this.input.files[0]) {
			this.showImage(this.input.files[0]);
		}
	});

	// Drag & drop
		this.wrapper.addEventListener('dragover', e => {
		  e.preventDefault();
		  this.wrapper.classList.add('dragover');
	  });

		this.wrapper.addEventListener('dragleave', () => {
		  this.wrapper.classList.remove('dragover');
	  });

		this.wrapper.addEventListener('drop', e => {
		  e.preventDefault();
		  this.wrapper.classList.remove('dragover');

		  const file = e.dataTransfer.files[0];
		  if (file && file.type.startsWith('image')) {
			this.showImage(file);
		}
	});

	// Paste image
		document.addEventListener('paste', e => {
		  const item = [...e.clipboardData.items].find(i =>
			i.type.startsWith('image')
			);
		  if (item) {
			this.showImage(item.getAsFile());
		}
	});

	// Close button removes active class
		this.closeBtn.addEventListener('click', () => {
		  if (this.contextWrapper) {
			this.contextWrapper.classList.remove(
			  'image-search-context-wrapper-active'
			  );
		}
	  // Optionally close the dropdown as well
		const toggleBox = document.getElementById('toggleBox');
		if (toggleBox) toggleBox.style.display = 'none';
	});
	}

	showImage(file) {
		const img = document.createElement('img');
		img.src = URL.createObjectURL(file);

		this.preview.innerHTML = '';
		this.preview.appendChild(img);
	}
}

// ====== INIT IMAGE UPLOADER ======
document.addEventListener('DOMContentLoaded', () => {
	const uploader = document.getElementById('imageUpload');
	if (uploader) {
		new ImageUploader(uploader);
	}
});
</script>

<script>
	ScrollReveal().reveal('.product-list-wrap .col');
</script>


</body>

</html>
