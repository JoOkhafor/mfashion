<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<?php require_once 'header.php' ?>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="sidebar-enabled">
	<!--begin::Main-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="page d-flex flex-row flex-column-fluid">
			<!--begin::Aside-->
			<div id="kt_aside" class="aside py-9" data-kt-drawer="true" data-kt-drawer-name="aside"
				data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
				data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
				data-kt-drawer-toggle="#kt_aside_toggle">
				<!--begin::Brand-->
				<div class="aside-logo flex-column-auto px-9 mb-9" id="kt_aside_logo">
					<!--begin::Logo-->
					<a href="../../demo3/dist/index.html">
						<img alt="Logo" src="assets/media/logos/logo-demo3-default.svg" class="h-35px logo" />
					</a>
					<!--end::Logo-->
				</div>
				<!--end::Brand-->
				<!--begin::Aside menu-->
			

                   <?php include  'menu_bar.php' ?>
				
				<!--end::Aside menu-->
				
			
			</div>
			<!--end::Aside-->
			<!--begin::Wrapper-->
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
				<!--begin::Header-->
				<div id="kt_header" class="header">
					<!--begin::Container-->
					<div class="container d-flex flex-stack flex-wrap gap-2" id="kt_header_container">
						<!--begin::Page title-->
						<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0"
							data-kt-swapper="true" data-kt-swapper-mode="prepend"
							data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
							<!--begin::Heading-->
							<h1 class="d-flex flex-column text-dark fw-bolder my-0 fs-1">Hello, Esso
								<small class="text-muted fs-6 fw-bold ms-1 pt-1">Tu as 24 niuvelles ventes</small>
							</h1>
							<!--end::Heading-->
						</div>
						<!--end::Page title=-->
						<!--begin::Wrapper-->
						<div class="d-flex d-lg-none align-items-center ms-n2 me-2">
							<!--begin::Aside mobile toggle-->
							<div class="btn btn-icon btn-active-icon-primary" id="kt_aside_toggle">
								<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
								<span class="svg-icon svg-icon-1 mt-1">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
										fill="none">
										<path
											d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
											fill="currentColor" />
										<path opacity="0.3"
											d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
											fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Aside mobile toggle-->
							<!--begin::Logo-->
							<a href="../../demo3/dist/index.html" class="d-flex align-items-center">
								<img alt="Logo" src="assets/media/logos/logo-demo3-default.svg" class="h-20px" />
							</a>
							<!--end::Logo-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Topbar-->
						<div class="d-flex align-items-center flex-shrink-0">
							<!--begin::Search-->
							<div id="kt_header_search" class="header-search d-flex align-items-center w-lg-250px"
								data-kt-search-keypress="true" data-kt-search-min-length="2"
								data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-search-responsive="lg"
								data-kt-menu-trigger="auto" data-kt-menu-permanent="true"
								data-kt-menu-placement="bottom-end">
								<!--begin::Tablet and mobile search toggle-->
								<div data-kt-search-element="toggle" class="d-flex d-lg-none align-items-center">
									<div
										class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline btn-outline-secondary w-40px h-40px">
										<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
										<span class="svg-icon svg-icon-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
													rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
												<path
													d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
													fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Tablet and mobile search toggle-->
								<!--begin::Form(use d-none d-lg-flex classes for responsive search)-->
								<form data-kt-search-element="form"
									class="d-none align-items-center d-lg-flex w-100 mb-5 mb-lg-0 position-relative"
									autocomplete="off">
									<!--begin::Hidden input(Added to disable form autocomplete)-->
									<input type="hidden" />
									<!--end::Hidden input-->
									<!--begin::Icon-->
									<!--begin::Svg Icon | path: icons/duotune/general/gen004.svg-->
									<span
										class="svg-icon svg-icon-2 svg-icon-gray-700 position-absolute top-50 translate-middle-y ms-4">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
											viewBox="0 0 24 24" fill="none">
											<path
												d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z"
												fill="currentColor" />
											<path opacity="0.3"
												d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z"
												fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
									<!--end::Icon-->
									<!--begin::Input-->
									<input type="text" class="form-control bg-transparent ps-13 fs-7 h-40px"
										name="search" value="" placeholder="Quick Search"
										data-kt-search-element="input" />
									<!--end::Input-->
									<!--begin::Spinner-->
									<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
										data-kt-search-element="spinner">
										<span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
									</span>
									<!--end::Spinner-->
									<!--begin::Reset-->
									<span
										class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4"
										data-kt-search-element="clear">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
										<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
													transform="rotate(-45 6 17.3137)" fill="currentColor" />
												<rect x="7.41422" y="6" width="16" height="2" rx="1"
													transform="rotate(45 7.41422 6)" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<!--end::Reset-->
								</form>
								<!--end::Form-->
								<!--begin::Menu-->
								<div data-kt-search-element="content"
									class="menu menu-sub menu-sub-dropdown w-300px w-md-350px py-7 px-7 overflow-hidden">
									<!--begin::Wrapper-->
									<div data-kt-search-element="wrapper">
										<!--begin::Recently viewed-->
										<div data-kt-search-element="results" class="d-none">
											<!--begin::Items-->
											<div class="scroll-y mh-200px mh-lg-350px">
												<!--begin::Category title-->
												<h3 class="fs-5 text-muted m-0 pb-5"
													data-kt-search-element="category-title">Users</h3>
												<!--end::Category title-->
												<!--begin::Item-->
												<a href="#"
													class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<img src="assets/media/avatars/300-6.jpg" alt="" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-bold">
														<span class="fs-6 fw-bold">Karina Clark</span>
														<span class="fs-7 fw-bold text-muted">Marketing Manager</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#"
													class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<img src="assets/media/avatars/300-2.jpg" alt="" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-bold">
														<span class="fs-6 fw-bold">Olivia Bold</span>
														<span class="fs-7 fw-bold text-muted">Software Engineer</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#"
													class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<img src="assets/media/avatars/300-9.jpg" alt="" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-bold">
														<span class="fs-6 fw-bold">Ana Clark</span>
														<span class="fs-7 fw-bold text-muted">UI/UX Designer</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#"
													class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<img src="assets/media/avatars/300-14.jpg" alt="" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-bold">
														<span class="fs-6 fw-bold">Nick Pitola</span>
														<span class="fs-7 fw-bold text-muted">Art Director</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#"
													class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<img src="assets/media/avatars/300-11.jpg" alt="" />
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-bold">
														<span class="fs-6 fw-bold">Edward Kulnic</span>
														<span class="fs-7 fw-bold text-muted">System
															Administrator</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Category title-->
												<h3 class="fs-5 text-muted m-0 pt-5 pb-5"
													data-kt-search-element="category-title">Customers</h3>
												<!--end::Category title-->
												<!--begin::Item-->
												<a href="#"
													class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<img class="w-20px h-20px"
																src="assets/media/svg/brand-logos/volicity-9.svg"
																alt="" />
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-bold">
														<span class="fs-6 fw-bold">Company Rbranding</span>
														<span class="fs-7 fw-bold text-muted">UI Design</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#"
													class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<img class="w-20px h-20px"
																src="assets/media/svg/brand-logos/tvit.svg" alt="" />
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-bold">
														<span class="fs-6 fw-bold">Company Re-branding</span>
														<span class="fs-7 fw-bold text-muted">Web Development</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#"
													class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<img class="w-20px h-20px"
																src="assets/media/svg/misc/infography.svg" alt="" />
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-bold">
														<span class="fs-6 fw-bold">Business Analytics App</span>
														<span class="fs-7 fw-bold text-muted">Administration</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#"
													class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<img class="w-20px h-20px"
																src="assets/media/svg/brand-logos/leaf.svg" alt="" />
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-bold">
														<span class="fs-6 fw-bold">EcoLeaf App Launch</span>
														<span class="fs-7 fw-bold text-muted">Marketing</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#"
													class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<img class="w-20px h-20px"
																src="assets/media/svg/brand-logos/tower.svg" alt="" />
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column justify-content-start fw-bold">
														<span class="fs-6 fw-bold">Tower Group Website</span>
														<span class="fs-7 fw-bold text-muted">Google Adwords</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Category title-->
												<h3 class="fs-5 text-muted m-0 pt-5 pb-5"
													data-kt-search-element="category-title">Projects</h3>
												<!--end::Category title-->
												<!--begin::Item-->
												<a href="#"
													class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-primary">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
																	height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3"
																		d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z"
																		fill="currentColor" />
																	<rect x="7" y="17" width="6" height="2" rx="1"
																		fill="currentColor" />
																	<rect x="7" y="12" width="10" height="2" rx="1"
																		fill="currentColor" />
																	<rect x="7" y="7" width="6" height="2" rx="1"
																		fill="currentColor" />
																	<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z"
																		fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<span class="fs-6 fw-bold">Si-Fi Project by AU Themes</span>
														<span class="fs-7 fw-bold text-muted">#45670</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#"
													class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-primary">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
																	height="24" viewBox="0 0 24 24" fill="none">
																	<rect x="8" y="9" width="3" height="10" rx="1.5"
																		fill="currentColor" />
																	<rect opacity="0.5" x="13" y="5" width="3"
																		height="14" rx="1.5" fill="currentColor" />
																	<rect x="18" y="11" width="3" height="8" rx="1.5"
																		fill="currentColor" />
																	<rect x="3" y="13" width="3" height="6" rx="1.5"
																		fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<span class="fs-6 fw-bold">Shopix Mobile App Planning</span>
														<span class="fs-7 fw-bold text-muted">#45690</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#"
													class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-primary">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
																	height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3"
																		d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
																		fill="currentColor" />
																	<rect x="6" y="12" width="7" height="2" rx="1"
																		fill="currentColor" />
																	<rect x="6" y="7" width="12" height="2" rx="1"
																		fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<span class="fs-6 fw-bold">Finance Monitoring SAAS
															Discussion</span>
														<span class="fs-7 fw-bold text-muted">#21090</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
												<!--begin::Item-->
												<a href="#"
													class="d-flex text-dark text-hover-primary align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-primary">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
																	height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3"
																		d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z"
																		fill="currentColor" />
																	<path
																		d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z"
																		fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<span class="fs-6 fw-bold">Dashboard Analitics Launch</span>
														<span class="fs-7 fw-bold text-muted">#34560</span>
													</div>
													<!--end::Title-->
												</a>
												<!--end::Item-->
											</div>
											<!--end::Items-->
										</div>
										<!--end::Recently viewed-->
										<!--begin::Recently viewed-->
										<div class="" data-kt-search-element="main">
											<!--begin::Heading-->
											<div class="d-flex flex-stack fw-bold mb-4">
												<!--begin::Label-->
												<span class="text-muted fs-6 me-2">Recently Searched:</span>
												<!--end::Label-->
												<!--begin::Toolbar-->
												<div class="d-flex" data-kt-search-element="toolbar">
													<!--begin::Preferences toggle-->
													<div data-kt-search-element="preferences-show"
														class="btn btn-icon w-20px btn-sm btn-active-color-primary me-2 data-bs-toggle="
														title="Show search preferences">
														<!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
														<span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24"
																height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3"
																	d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z"
																	fill="currentColor" />
																<path
																	d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z"
																	fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</div>
													<!--end::Preferences toggle-->
													<!--begin::Advanced search toggle-->
													<div data-kt-search-element="advanced-options-form-show"
														class="btn btn-icon w-20px btn-sm btn-active-color-primary me-n1"
														data-bs-toggle="tooltip" title="Show more search options">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
														<span class="svg-icon svg-icon-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24"
																height="24" viewBox="0 0 24 24" fill="none">
																<path
																	d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																	fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</div>
													<!--end::Advanced search toggle-->
												</div>
												<!--end::Toolbar-->
											</div>
											<!--end::Heading-->
											<!--begin::Items-->
											<div class="scroll-y mh-200px mh-lg-325px">
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/electronics/elc004.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-primary">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
																	height="24" viewBox="0 0 24 24" fill="none">
																	<path
																		d="M2 16C2 16.6 2.4 17 3 17H21C21.6 17 22 16.6 22 16V15H2V16Z"
																		fill="currentColor" />
																	<path opacity="0.3"
																		d="M21 3H3C2.4 3 2 3.4 2 4V15H22V4C22 3.4 21.6 3 21 3Z"
																		fill="currentColor" />
																	<path opacity="0.3" d="M15 17H9V20H15V17Z"
																		fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<a href="#"
															class="fs-6 text-gray-800 text-hover-primary fw-bold">BoomApp
															by Keenthemes</a>
														<span class="fs-7 text-muted fw-bold">#45789</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/graphs/gra001.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-primary">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
																	height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3"
																		d="M14 3V21H10V3C10 2.4 10.4 2 11 2H13C13.6 2 14 2.4 14 3ZM7 14H5C4.4 14 4 14.4 4 15V21H8V15C8 14.4 7.6 14 7 14Z"
																		fill="currentColor" />
																	<path
																		d="M21 20H20V8C20 7.4 19.6 7 19 7H17C16.4 7 16 7.4 16 8V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z"
																		fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<a href="#"
															class="fs-6 text-gray-800 text-hover-primary fw-bold">"Kept
															API Project Meeting</a>
														<span class="fs-7 text-muted fw-bold">#84050</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/graphs/gra006.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-primary">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
																	height="24" viewBox="0 0 24 24" fill="none">
																	<path
																		d="M13 5.91517C15.8 6.41517 18 8.81519 18 11.8152C18 12.5152 17.9 13.2152 17.6 13.9152L20.1 15.3152C20.6 15.6152 21.4 15.4152 21.6 14.8152C21.9 13.9152 22.1 12.9152 22.1 11.8152C22.1 7.01519 18.8 3.11521 14.3 2.01521C13.7 1.91521 13.1 2.31521 13.1 3.01521V5.91517H13Z"
																		fill="currentColor" />
																	<path opacity="0.3"
																		d="M19.1 17.0152C19.7 17.3152 19.8 18.1152 19.3 18.5152C17.5 20.5152 14.9 21.7152 12 21.7152C9.1 21.7152 6.50001 20.5152 4.70001 18.5152C4.30001 18.0152 4.39999 17.3152 4.89999 17.0152L7.39999 15.6152C8.49999 16.9152 10.2 17.8152 12 17.8152C13.8 17.8152 15.5 17.0152 16.6 15.6152L19.1 17.0152ZM6.39999 13.9151C6.19999 13.2151 6 12.5152 6 11.8152C6 8.81517 8.2 6.41515 11 5.91515V3.01519C11 2.41519 10.4 1.91519 9.79999 2.01519C5.29999 3.01519 2 7.01517 2 11.8152C2 12.8152 2.2 13.8152 2.5 14.8152C2.7 15.4152 3.4 15.7152 4 15.3152L6.39999 13.9151Z"
																		fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<a href="#"
															class="fs-6 text-gray-800 text-hover-primary fw-bold">"KPI
															Monitoring App Launch</a>
														<span class="fs-7 text-muted fw-bold">#84250</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/graphs/gra002.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-primary">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
																	height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M20 8L12.5 5L5 14V19H20V8Z"
																		fill="currentColor" />
																	<path
																		d="M21 18H6V3C6 2.4 5.6 2 5 2C4.4 2 4 2.4 4 3V18H3C2.4 18 2 18.4 2 19C2 19.6 2.4 20 3 20H4V21C4 21.6 4.4 22 5 22C5.6 22 6 21.6 6 21V20H21C21.6 20 22 19.6 22 19C22 18.4 21.6 18 21 18Z"
																		fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<a href="#"
															class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
															Reference FAQ</a>
														<span class="fs-7 text-muted fw-bold">#67945</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-primary">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
																	height="24" viewBox="0 0 24 24" fill="none">
																	<path
																		d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z"
																		fill="currentColor" />
																	<path opacity="0.3"
																		d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z"
																		fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<a href="#"
															class="fs-6 text-gray-800 text-hover-primary fw-bold">"FitPro
															App Development</a>
														<span class="fs-7 text-muted fw-bold">#84250</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/finance/fin001.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-primary">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
																	height="24" viewBox="0 0 24 24" fill="none">
																	<path
																		d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z"
																		fill="currentColor" />
																	<path opacity="0.3"
																		d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z"
																		fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<a href="#"
															class="fs-6 text-gray-800 text-hover-primary fw-bold">Shopix
															Mobile App</a>
														<span class="fs-7 text-muted fw-bold">#45690</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-5">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/graphs/gra002.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-primary">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
																	height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M20 8L12.5 5L5 14V19H20V8Z"
																		fill="currentColor" />
																	<path
																		d="M21 18H6V3C6 2.4 5.6 2 5 2C4.4 2 4 2.4 4 3V18H3C2.4 18 2 18.4 2 19C2 19.6 2.4 20 3 20H4V21C4 21.6 4.4 22 5 22C5.6 22 6 21.6 6 21V20H21C21.6 20 22 19.6 22 19C22 18.4 21.6 18 21 18Z"
																		fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Title-->
													<div class="d-flex flex-column">
														<a href="#"
															class="fs-6 text-gray-800 text-hover-primary fw-bold">"Landing
															UI Design" Launch</a>
														<span class="fs-7 text-muted fw-bold">#24005</span>
													</div>
													<!--end::Title-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Items-->
										</div>
										<!--end::Recently viewed-->
										<!--begin::Empty-->
										<div data-kt-search-element="empty" class="text-center d-none">
											<!--begin::Icon-->
											<div class="pt-10 pb-10">
												<!--begin::Svg Icon | path: icons/duotune/files/fil024.svg-->
												<span class="svg-icon svg-icon-4x opacity-50">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<path opacity="0.3"
															d="M14 2H6C4.89543 2 4 2.89543 4 4V20C4 21.1046 4.89543 22 6 22H18C19.1046 22 20 21.1046 20 20V8L14 2Z"
															fill="currentColor" />
														<path d="M20 8L14 2V6C14 7.10457 14.8954 8 16 8H20Z"
															fill="currentColor" />
														<rect x="13.6993" y="13.6656" width="4.42828" height="1.73089"
															rx="0.865447" transform="rotate(45 13.6993 13.6656)"
															fill="currentColor" />
														<path
															d="M15 12C15 14.2 13.2 16 11 16C8.8 16 7 14.2 7 12C7 9.8 8.8 8 11 8C13.2 8 15 9.8 15 12ZM11 9.6C9.68 9.6 8.6 10.68 8.6 12C8.6 13.32 9.68 14.4 11 14.4C12.32 14.4 13.4 13.32 13.4 12C13.4 10.68 12.32 9.6 11 9.6Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Icon-->
											<!--begin::Message-->
											<div class="pb-15 fw-bold">
												<h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
												<div class="text-muted fs-7">Please try again with a different query
												</div>
											</div>
											<!--end::Message-->
										</div>
										<!--end::Empty-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Preferences-->
									<form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
										<!--begin::Heading-->
										<h3 class="fw-bold text-dark mb-7">Advanced Search</h3>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="mb-5">
											<input type="text" class="form-control form-control-sm form-control-solid"
												placeholder="Contains the word" name="query" />
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5">
											<!--begin::Radio group-->
											<div class="nav-group nav-group-fluid">
												<!--begin::Option-->
												<label>
													<input type="radio" class="btn-check" name="type" value="has"
														checked="checked" />
													<span
														class="btn btn-sm btn-color-muted btn-active btn-active-primary">All</span>
												</label>
												<!--end::Option-->
												<!--begin::Option-->
												<label>
													<input type="radio" class="btn-check" name="type" value="users" />
													<span
														class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Users</span>
												</label>
												<!--end::Option-->
												<!--begin::Option-->
												<label>
													<input type="radio" class="btn-check" name="type" value="orders" />
													<span
														class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Orders</span>
												</label>
												<!--end::Option-->
												<!--begin::Option-->
												<label>
													<input type="radio" class="btn-check" name="type"
														value="projects" />
													<span
														class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Projects</span>
												</label>
												<!--end::Option-->
											</div>
											<!--end::Radio group-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5">
											<input type="text" name="assignedto"
												class="form-control form-control-sm form-control-solid"
												placeholder="Assigned to" value="" />
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5">
											<input type="text" name="collaborators"
												class="form-control form-control-sm form-control-solid"
												placeholder="Collaborators" value="" />
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5">
											<!--begin::Radio group-->
											<div class="nav-group nav-group-fluid">
												<!--begin::Option-->
												<label>
													<input type="radio" class="btn-check" name="attachment" value="has"
														checked="checked" />
													<span
														class="btn btn-sm btn-color-muted btn-active btn-active-primary">Has
														attachment</span>
												</label>
												<!--end::Option-->
												<!--begin::Option-->
												<label>
													<input type="radio" class="btn-check" name="attachment"
														value="any" />
													<span
														class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Any</span>
												</label>
												<!--end::Option-->
											</div>
											<!--end::Radio group-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-5">
											<select name="timezone" aria-label="Select a Timezone"
												data-control="select2" data-placeholder="date_period"
												class="form-select form-select-sm form-select-solid">
												<option value="next">Within the next</option>
												<option value="last">Within the last</option>
												<option value="between">Between</option>
												<option value="on">On</option>
											</select>
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row mb-8">
											<!--begin::Col-->
											<div class="col-6">
												<input type="number" name="date_number"
													class="form-control form-control-sm form-control-solid"
													placeholder="Lenght" value="" />
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-6">
												<select name="date_typer" aria-label="Select a Timezone"
													data-control="select2" data-placeholder="Period"
													class="form-select form-select-sm form-select-solid">
													<option value="days">Days</option>
													<option value="weeks">Weeks</option>
													<option value="months">Months</option>
													<option value="years">Years</option>
												</select>
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Actions-->
										<div class="d-flex justify-content-end">
											<button type="reset"
												class="btn btn-sm btn-light fw-bolder btn-active-light-primary me-2"
												data-kt-search-element="advanced-options-form-cancel">Cancel</button>
											<a href="../../demo3/dist/pages/search/horizontal.html"
												class="btn btn-sm fw-bolder btn-primary"
												data-kt-search-element="advanced-options-form-search">Search</a>
										</div>
										<!--end::Actions-->
									</form>
									<!--end::Preferences-->
									<!--begin::Preferences-->
									<form data-kt-search-element="preferences" class="pt-1 d-none">
										<!--begin::Heading-->
										<h3 class="fw-bold text-dark mb-7">Search Preferences</h3>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="pb-4 border-bottom">
											<label
												class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
												<span
													class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Projects</span>
												<input class="form-check-input" type="checkbox" value="1"
													checked="checked" />
											</label>
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="py-4 border-bottom">
											<label
												class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
												<span
													class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Targets</span>
												<input class="form-check-input" type="checkbox" value="1"
													checked="checked" />
											</label>
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="py-4 border-bottom">
											<label
												class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
												<span
													class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Affiliate
													Programs</span>
												<input class="form-check-input" type="checkbox" value="1" />
											</label>
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="py-4 border-bottom">
											<label
												class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
												<span
													class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Referrals</span>
												<input class="form-check-input" type="checkbox" value="1"
													checked="checked" />
											</label>
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="py-4 border-bottom">
											<label
												class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
												<span
													class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Users</span>
												<input class="form-check-input" type="checkbox" value="1" />
											</label>
										</div>
										<!--end::Input group-->
										<!--begin::Actions-->
										<div class="d-flex justify-content-end pt-7">
											<button type="reset"
												class="btn btn-sm btn-light fw-bolder btn-active-light-primary me-2"
												data-kt-search-element="preferences-dismiss">Cancel</button>
											<button type="submit" class="btn btn-sm fw-bolder btn-primary">Save
												Changes</button>
										</div>
										<!--end::Actions-->
									</form>
									<!--end::Preferences-->
								</div>
								<!--end::Menu-->
							</div>
							<!--end::Search-->
							<!--begin::Activities-->
							<div class="d-flex align-items-center ms-3 ms-lg-4">
								<!--begin::Drawer toggle-->
								<div class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline btn-outline-secondary w-40px h-40px"
									id="kt_activities_toggle">
									<!--begin::Svg Icon | path: icons/duotune/general/gen007.svg-->
									<span class="svg-icon svg-icon-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
											viewBox="0 0 24 24" fill="none">
											<path opacity="0.3"
												d="M12 22C13.6569 22 15 20.6569 15 19C15 17.3431 13.6569 16 12 16C10.3431 16 9 17.3431 9 19C9 20.6569 10.3431 22 12 22Z"
												fill="currentColor" />
											<path
												d="M19 15V18C19 18.6 18.6 19 18 19H6C5.4 19 5 18.6 5 18V15C6.1 15 7 14.1 7 13V10C7 7.6 8.7 5.6 11 5.1V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V5.1C15.3 5.6 17 7.6 17 10V13C17 14.1 17.9 15 19 15ZM11 10C11 9.4 11.4 9 12 9C12.6 9 13 8.6 13 8C13 7.4 12.6 7 12 7C10.3 7 9 8.3 9 10C9 10.6 9.4 11 10 11C10.6 11 11 10.6 11 10Z"
												fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
								<!--end::Drawer toggle-->
							</div>
							<!--end::Activities-->
							<!--begin::Chat-->
							<div class="d-flex align-items-center ms-3 ms-lg-4">
								<!--begin::Drawer wrapper-->
								<div class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline btn-outline-secondary w-40px h-40px position-relative"
									id="kt_drawer_chat_toggle">
									<!--begin::Svg Icon | path: icons/duotune/communication/com003.svg-->
									<span class="svg-icon svg-icon-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
											viewBox="0 0 24 24" fill="none">
											<path opacity="0.3"
												d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z"
												fill="currentColor" />
											<path
												d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z"
												fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
									<!--begin::Bullet-->
									<span
										class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
									<!--end::Bullet-->
								</div>
								<!--end::Drawer wrapper-->
							</div>
							<!--end::Chat-->
							<!--begin::Theme mode-->
							<div class="d-flex align-items-center ms-3 ms-lg-4">
								<!--begin::Theme mode docs-->
								<a class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline btn-outline-secondary w-40px h-40px"
									href="../../demo3/dist/documentation/getting-started/dark-mode.html">
									<i class="fonticon-sun fs-2"></i>
								</a>
								<!--end::Theme mode docs-->
							</div>
							<!--end::Theme mode-->
							<!--begin::Sidebar Toggler-->
							<button class="btn btn-icon btn-active-icon-primary w-40px h-40px d-xxl-none ms-2 me-n2"
								id="kt_sidebar_toggler">
								<!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
								<span class="svg-icon svg-icon-2x">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
										fill="none">
										<path opacity="0.3"
											d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z"
											fill="currentColor" />
										<path
											d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z"
											fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</button>
							<!--end::Sidebar Toggler-->
						</div>
						<!--end::Topbar-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Header-->
				<!--begin::Content-->
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Container-->
						<div class="container-xxl" id="kt_content_container">
							<!--begin::Layout-->
							<div class="d-flex flex-column flex-lg-row">
								<!--begin::Sidebar-->
								<div class="flex-column flex-lg-row-auto w-lg-250px w-xl-350px mb-10">
									<!--begin::Card-->
									<div class="card mb-5 mb-xl-8">
										<!--begin::Card body-->
										<div class="card-body">
											<!--begin::Summary-->
											<!--begin::User Info-->
											<div class="d-flex flex-center flex-column py-5">
												<!--begin::Avatar-->
												<div class="symbol symbol-100px symbol-circle mb-7">
													<img src="assets/media/avatars/300-6.jpg" alt="image" />
												</div>
												<!--end::Avatar-->
												<!--begin::Name-->
												<a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-3">Emma Smith</a>
												<!--end::Name-->
												<!--begin::Position-->
												<div class="mb-9">
													<!--begin::Badge-->
													<div class="badge badge-lg badge-light-primary d-inline">Administrator</div>
													<!--begin::Badge-->
												</div>
												<!--end::Position-->
												<!--begin::Info-->
												<!--begin::Info heading-->
												<div class="fw-bolder mb-3">Assigned Tickets
												<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Number of support tickets assigned, closed and pending this week."></i></div>
												<!--end::Info heading-->
												<div class="d-flex flex-wrap flex-center">
													<!--begin::Stats-->
													<div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
														<div class="fs-4 fw-bolder text-gray-700">
															<span class="w-75px">243</span>
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
															<span class="svg-icon svg-icon-3 svg-icon-success">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																	<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
														<div class="fw-bold text-muted">Total</div>
													</div>
													<!--end::Stats-->
													<!--begin::Stats-->
													<div class="border border-gray-300 border-dashed rounded py-3 px-3 mx-4 mb-3">
														<div class="fs-4 fw-bolder text-gray-700">
															<span class="w-50px">56</span>
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
															<span class="svg-icon svg-icon-3 svg-icon-danger">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
																	<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
														<div class="fw-bold text-muted">Solved</div>
													</div>
													<!--end::Stats-->
													<!--begin::Stats-->
													<div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
														<div class="fs-4 fw-bolder text-gray-700">
															<span class="w-50px">188</span>
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
															<span class="svg-icon svg-icon-3 svg-icon-success">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																	<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
														<div class="fw-bold text-muted">Open</div>
													</div>
													<!--end::Stats-->
												</div>
												<!--end::Info-->
											</div>
											<!--end::User Info-->
											<!--end::Summary-->
											<!--begin::Details toggle-->
											<div class="d-flex flex-stack fs-4 py-3">
												<div class="fw-bolder rotate collapsible" data-bs-toggle="collapse" href="#kt_user_view_details" role="button" aria-expanded="false" aria-controls="kt_user_view_details">Details
												<span class="ms-2 rotate-180">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
													<span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</span></div>
												<span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit customer details">
													<a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_update_details">Edit</a>
												</span>
											</div>
											<!--end::Details toggle-->
											<div class="separator"></div>
											<!--begin::Details content-->
											<div id="kt_user_view_details" class="collapse show">
												<div class="pb-5 fs-6">
													<!--begin::Details item-->
													<div class="fw-bolder mt-5">Account ID</div>
													<div class="text-gray-600">ID-45453423</div>
													<!--begin::Details item-->
													<!--begin::Details item-->
													<div class="fw-bolder mt-5">Email</div>
													<div class="text-gray-600">
														<a href="#" class="text-gray-600 text-hover-primary">info@keenthemes.com</a>
													</div>
													<!--begin::Details item-->
													<!--begin::Details item-->
													<div class="fw-bolder mt-5">Address</div>
													<div class="text-gray-600">101 Collin Street,
													<br />Melbourne 3000 VIC
													<br />Australia</div>
													<!--begin::Details item-->
													<!--begin::Details item-->
													<div class="fw-bolder mt-5">Language</div>
													<div class="text-gray-600">English</div>
													<!--begin::Details item-->
													<!--begin::Details item-->
													<div class="fw-bolder mt-5">Last Login</div>
													<div class="text-gray-600">19 Aug 2022, 10:30 am</div>
													<!--begin::Details item-->
												</div>
											</div>
											<!--end::Details content-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card-->
									<!--begin::Connected Accounts-->
									<div class="card mb-5 mb-xl-8">
										<!--begin::Card header-->
										<div class="card-header border-0">
											<div class="card-title">
												<h3 class="fw-bolder m-0">Connected Accounts</h3>
											</div>
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-2">
											<!--begin::Notice-->
											<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
												<!--begin::Icon-->
												<!--begin::Svg Icon | path: icons/duotune/art/art006.svg-->
												<span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path opacity="0.3" d="M22 19V17C22 16.4 21.6 16 21 16H8V3C8 2.4 7.6 2 7 2H5C4.4 2 4 2.4 4 3V19C4 19.6 4.4 20 5 20H21C21.6 20 22 19.6 22 19Z" fill="currentColor" />
														<path d="M20 5V21C20 21.6 19.6 22 19 22H17C16.4 22 16 21.6 16 21V8H8V4H19C19.6 4 20 4.4 20 5ZM3 8H4V4H3C2.4 4 2 4.4 2 5V7C2 7.6 2.4 8 3 8Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
												<!--end::Icon-->
												<!--begin::Wrapper-->
												<div class="d-flex flex-stack flex-grow-1">
													<!--begin::Content-->
													<div class="fw-bold">
														<div class="fs-6 text-gray-700">By connecting an account, you hereby agree to our
														<a href="#" class="me-1">privacy policy</a>and
														<a href="#">terms of use</a>.</div>
													</div>
													<!--end::Content-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Notice-->
											<!--begin::Items-->
											<div class="py-2">
												<!--begin::Item-->
												<div class="d-flex flex-stack">
													<div class="d-flex">
														<img src="assets/media/svg/brand-logos/google-icon.svg" class="w-30px me-6" alt="" />
														<div class="d-flex flex-column">
															<a href="#" class="fs-5 text-dark text-hover-primary fw-bolder">Google</a>
															<div class="fs-6 fw-bold text-muted">Plan properly your workflow</div>
														</div>
													</div>
													<div class="d-flex justify-content-end">
														<!--begin::Switch-->
														<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
															<!--begin::Input-->
															<input class="form-check-input" name="google" type="checkbox" value="1" id="kt_modal_connected_accounts_google" checked="checked" />
															<!--end::Input-->
															<!--begin::Label-->
															<span class="form-check-label fw-bold text-muted" for="kt_modal_connected_accounts_google"></span>
															<!--end::Label-->
														</label>
														<!--end::Switch-->
													</div>
												</div>
												<!--end::Item-->
												<div class="separator separator-dashed my-5"></div>
												<!--begin::Item-->
												<div class="d-flex flex-stack">
													<div class="d-flex">
														<img src="assets/media/svg/brand-logos/github.svg" class="w-30px me-6" alt="" />
														<div class="d-flex flex-column">
															<a href="#" class="fs-5 text-dark text-hover-primary fw-bolder">Github</a>
															<div class="fs-6 fw-bold text-muted">Keep eye on on your Repositories</div>
														</div>
													</div>
													<div class="d-flex justify-content-end">
														<!--begin::Switch-->
														<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
															<!--begin::Input-->
															<input class="form-check-input" name="github" type="checkbox" value="1" id="kt_modal_connected_accounts_github" checked="checked" />
															<!--end::Input-->
															<!--begin::Label-->
															<span class="form-check-label fw-bold text-muted" for="kt_modal_connected_accounts_github"></span>
															<!--end::Label-->
														</label>
														<!--end::Switch-->
													</div>
												</div>
												<!--end::Item-->
												<div class="separator separator-dashed my-5"></div>
												<!--begin::Item-->
												<div class="d-flex flex-stack">
													<div class="d-flex">
														<img src="assets/media/svg/brand-logos/slack-icon.svg" class="w-30px me-6" alt="" />
														<div class="d-flex flex-column">
															<a href="#" class="fs-5 text-dark text-hover-primary fw-bolder">Slack</a>
															<div class="fs-6 fw-bold text-muted">Integrate Projects Discussions</div>
														</div>
													</div>
													<div class="d-flex justify-content-end">
														<!--begin::Switch-->
														<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
															<!--begin::Input-->
															<input class="form-check-input" name="slack" type="checkbox" value="1" id="kt_modal_connected_accounts_slack" />
															<!--end::Input-->
															<!--begin::Label-->
															<span class="form-check-label fw-bold text-muted" for="kt_modal_connected_accounts_slack"></span>
															<!--end::Label-->
														</label>
														<!--end::Switch-->
													</div>
												</div>
												<!--end::Item-->
											</div>
											<!--end::Items-->
										</div>
										<!--end::Card body-->
										<!--begin::Card footer-->
										<div class="card-footer border-0 d-flex justify-content-center pt-0">
											<button class="btn btn-sm btn-light-primary">Save Changes</button>
										</div>
										<!--end::Card footer-->
									</div>
									<!--end::Connected Accounts-->
								</div>
								<!--end::Sidebar-->
								<!--begin::Content-->
								<div class="flex-lg-row-fluid ms-lg-15">
									<!--begin:::Tabs-->
									<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
										<!--begin:::Tab item-->
										<li class="nav-item">
											<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_user_view_overview_tab">Overview</a>
										</li>
										<!--end:::Tab item-->
										<!--begin:::Tab item-->
										<li class="nav-item">
											<a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#kt_user_view_overview_security">Security</a>
										</li>
										<!--end:::Tab item-->
										<!--begin:::Tab item-->
										<li class="nav-item">
											<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_user_view_overview_events_and_logs_tab">Events &amp; Logs</a>
										</li>
										<!--end:::Tab item-->
										<!--begin:::Tab item-->
										<li class="nav-item ms-auto">
											<!--begin::Action menu-->
											<a href="#" class="btn btn-primary ps-7" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-2 me-0">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
											<!--begin::Menu-->
											<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold py-4 w-250px fs-6" data-kt-menu="true">
												<!--begin::Menu item-->
												<div class="menu-item px-5">
													<div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase">Payments</div>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-5">
													<a href="#" class="menu-link px-5">Create invoice</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-5">
													<a href="#" class="menu-link flex-stack px-5">Create payments
													<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
													<a href="#" class="menu-link px-5">
														<span class="menu-title">Subscription</span>
														<span class="menu-arrow"></span>
													</a>
													<!--begin::Menu sub-->
													<div class="menu-sub menu-sub-dropdown w-175px py-4">
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-5">Apps</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-5">Billing</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-5">Statements</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu separator-->
														<div class="separator my-2"></div>
														<!--end::Menu separator-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<div class="menu-content px-3">
																<label class="form-check form-switch form-check-custom form-check-solid">
																	<input class="form-check-input w-30px h-20px" type="checkbox" value="" name="notifications" checked="checked" id="kt_user_menu_notifications" />
																	<span class="form-check-label text-muted fs-6" for="kt_user_menu_notifications">Notifications</span>
																</label>
															</div>
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu sub-->
												</div>
												<!--end::Menu item-->
												<!--begin::Menu separator-->
												<div class="separator my-3"></div>
												<!--end::Menu separator-->
												<!--begin::Menu item-->
												<div class="menu-item px-5">
													<div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase">Account</div>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-5">
													<a href="#" class="menu-link px-5">Reports</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-5 my-1">
													<a href="#" class="menu-link px-5">Account Settings</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-5">
													<a href="#" class="menu-link text-danger px-5">Delete customer</a>
												</div>
												<!--end::Menu item-->
											</div>
											<!--end::Menu-->
											<!--end::Menu-->
										</li>
										<!--end:::Tab item-->
									</ul>
									<!--end:::Tabs-->
									<!--begin:::Tab content-->
									<div class="tab-content" id="myTabContent">
										<!--begin:::Tab pane-->
										<div class="tab-pane fade show active" id="kt_user_view_overview_tab" role="tabpanel">
											<!--begin::Card-->
											<div class="card card-flush mb-6 mb-xl-9">
												<!--begin::Card header-->
												<div class="card-header mt-6">
													<!--begin::Card title-->
													<div class="card-title flex-column">
														<h2 class="mb-1">User's Schedule</h2>
														<div class="fs-6 fw-bold text-muted">2 upcoming meetings</div>
													</div>
													<!--end::Card title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar">
														<button type="button" class="btn btn-light-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_add_schedule">
														<!--SVG file not found: media/icons/duotune/art/art008.svg-->
														Add Schedule</button>
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body p-9 pt-4">
													<!--begin::Dates-->
													<ul class="nav nav-pills d-flex flex-nowrap hover-scroll-x py-2">
														<!--begin::Date-->
														<li class="nav-item me-1">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_0">
																<span class="opacity-50 fs-7 fw-bold">Su</span>
																<span class="fs-6 fw-boldest">21</span>
															</a>
														</li>
														<!--end::Date-->
														<!--begin::Date-->
														<li class="nav-item me-1">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary active" data-bs-toggle="tab" href="#kt_schedule_day_1">
																<span class="opacity-50 fs-7 fw-bold">Mo</span>
																<span class="fs-6 fw-boldest">22</span>
															</a>
														</li>
														<!--end::Date-->
														<!--begin::Date-->
														<li class="nav-item me-1">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_2">
																<span class="opacity-50 fs-7 fw-bold">Tu</span>
																<span class="fs-6 fw-boldest">23</span>
															</a>
														</li>
														<!--end::Date-->
														<!--begin::Date-->
														<li class="nav-item me-1">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_3">
																<span class="opacity-50 fs-7 fw-bold">We</span>
																<span class="fs-6 fw-boldest">24</span>
															</a>
														</li>
														<!--end::Date-->
														<!--begin::Date-->
														<li class="nav-item me-1">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_4">
																<span class="opacity-50 fs-7 fw-bold">Th</span>
																<span class="fs-6 fw-boldest">25</span>
															</a>
														</li>
														<!--end::Date-->
														<!--begin::Date-->
														<li class="nav-item me-1">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_5">
																<span class="opacity-50 fs-7 fw-bold">Fr</span>
																<span class="fs-6 fw-boldest">26</span>
															</a>
														</li>
														<!--end::Date-->
														<!--begin::Date-->
														<li class="nav-item me-1">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_6">
																<span class="opacity-50 fs-7 fw-bold">Sa</span>
																<span class="fs-6 fw-boldest">27</span>
															</a>
														</li>
														<!--end::Date-->
														<!--begin::Date-->
														<li class="nav-item me-1">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_7">
																<span class="opacity-50 fs-7 fw-bold">Su</span>
																<span class="fs-6 fw-boldest">28</span>
															</a>
														</li>
														<!--end::Date-->
														<!--begin::Date-->
														<li class="nav-item me-1">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_8">
																<span class="opacity-50 fs-7 fw-bold">Mo</span>
																<span class="fs-6 fw-boldest">29</span>
															</a>
														</li>
														<!--end::Date-->
														<!--begin::Date-->
														<li class="nav-item me-1">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_9">
																<span class="opacity-50 fs-7 fw-bold">Tu</span>
																<span class="fs-6 fw-boldest">30</span>
															</a>
														</li>
														<!--end::Date-->
														<!--begin::Date-->
														<li class="nav-item me-1">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-40px me-2 py-4 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_10">
																<span class="opacity-50 fs-7 fw-bold">We</span>
																<span class="fs-6 fw-boldest">31</span>
															</a>
														</li>
														<!--end::Date-->
													</ul>
													<!--end::Dates-->
													<!--begin::Tab Content-->
													<div class="tab-content">
														<!--begin::Day-->
														<div id="kt_schedule_day_0" class="tab-pane fade show">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">12:00 - 13:00
																	<span class="fs-7 text-muted text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Committee Review Approvals</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">Mark Randall</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">14:30 - 15:30
																	<span class="fs-7 text-muted text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Sales Pitch Proposal</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">Sean Bean</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">16:30 - 17:30
																	<span class="fs-7 text-muted text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Development Team Capacity Review</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">Naomi Hayabusa</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
														<!--begin::Day-->
														<div id="kt_schedule_day_1" class="tab-pane fade show active">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">10:00 - 11:00
																	<span class="fs-7 text-muted text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Sales Pitch Proposal</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">Walter White</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">14:30 - 15:30
																	<span class="fs-7 text-muted text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Development Team Capacity Review</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">Caleb Donaldson</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">12:00 - 13:00
																	<span class="fs-7 text-muted text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">Mark Randall</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">16:30 - 17:30
																	<span class="fs-7 text-muted text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Weekly Team Stand-Up</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">Bob Harris</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">16:30 - 17:30
																	<span class="fs-7 text-muted text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Committee Review Approvals</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">Sean Bean</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
														<!--begin::Day-->
														<div id="kt_schedule_day_2" class="tab-pane fade show">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">9:00 - 10:00
																	<span class="fs-7 text-muted text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Project Review &amp; Testing</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">Peter Marcus</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">10:00 - 11:00
																	<span class="fs-7 text-muted text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Team Backlog Grooming Session</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">Kendell Trevor</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">11:00 - 11:45
																	<span class="fs-7 text-muted text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Creative Content Initiative</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">Karina Clarke</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">14:30 - 15:30
																	<span class="fs-7 text-muted text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">Mark Randall</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
														<!--begin::Day-->
														<div id="kt_schedule_day_3" class="tab-pane fade show">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">14:30 - 15:30
																	<span class="fs-7 text-muted text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Lunch &amp; Learn Catch Up</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">Caleb Donaldson</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">10:00 - 11:00
																	<span class="fs-7 text-muted text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">Kendell Trevor</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">9:00 - 10:00
																	<span class="fs-7 text-muted text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Lunch &amp; Learn Catch Up</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">Terry Robins</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
														<!--begin::Day-->
														<div id="kt_schedule_day_4" class="tab-pane fade show">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">14:30 - 15:30
																	<span class="fs-7 text-muted text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Weekly Team Stand-Up</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">Peter Marcus</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">11:00 - 11:45
																	<span class="fs-7 text-muted text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Project Review &amp; Testing</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">Sean Bean</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">14:30 - 15:30
																	<span class="fs-7 text-muted text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Project Review &amp; Testing</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">Bob Harris</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
														<!--begin::Day-->
														<div id="kt_schedule_day_5" class="tab-pane fade show">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">12:00 - 13:00
																	<span class="fs-7 text-muted text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Team Backlog Grooming Session</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">David Stevenson</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">13:00 - 14:00
																	<span class="fs-7 text-muted text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Sales Pitch Proposal</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">Bob Harris</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">12:00 - 13:00
																	<span class="fs-7 text-muted text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">Yannis Gloverson</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">10:00 - 11:00
																	<span class="fs-7 text-muted text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Team Backlog Grooming Session</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">Peter Marcus</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
														<!--begin::Day-->
														<div id="kt_schedule_day_6" class="tab-pane fade show">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">9:00 - 10:00
																	<span class="fs-7 text-muted text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Weekly Team Stand-Up</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">Michael Walters</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">9:00 - 10:00
																	<span class="fs-7 text-muted text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Committee Review Approvals</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">David Stevenson</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">9:00 - 10:00
																	<span class="fs-7 text-muted text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Lunch &amp; Learn Catch Up</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">Terry Robins</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">16:30 - 17:30
																	<span class="fs-7 text-muted text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Team Backlog Grooming Session</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">Yannis Gloverson</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">11:00 - 11:45
																	<span class="fs-7 text-muted text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Committee Review Approvals</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">Yannis Gloverson</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
														<!--begin::Day-->
														<div id="kt_schedule_day_7" class="tab-pane fade show">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">9:00 - 10:00
																	<span class="fs-7 text-muted text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Committee Review Approvals</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">Walter White</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">12:00 - 13:00
																	<span class="fs-7 text-muted text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Development Team Capacity Review</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">David Stevenson</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">10:00 - 11:00
																	<span class="fs-7 text-muted text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Marketing Campaign Discussion</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">Michael Walters</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">12:00 - 13:00
																	<span class="fs-7 text-muted text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Committee Review Approvals</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">Naomi Hayabusa</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">12:00 - 13:00
																	<span class="fs-7 text-muted text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Creative Content Initiative</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">Sean Bean</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
														<!--begin::Day-->
														<div id="kt_schedule_day_8" class="tab-pane fade show">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">13:00 - 14:00
																	<span class="fs-7 text-muted text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Project Review &amp; Testing</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">Karina Clarke</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">14:30 - 15:30
																	<span class="fs-7 text-muted text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Sales Pitch Proposal</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">Caleb Donaldson</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">14:30 - 15:30
																	<span class="fs-7 text-muted text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Creative Content Initiative</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">Sean Bean</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">11:00 - 11:45
																	<span class="fs-7 text-muted text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Team Backlog Grooming Session</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">Caleb Donaldson</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">11:00 - 11:45
																	<span class="fs-7 text-muted text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Development Team Capacity Review</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">Caleb Donaldson</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
														<!--begin::Day-->
														<div id="kt_schedule_day_9" class="tab-pane fade show">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">9:00 - 10:00
																	<span class="fs-7 text-muted text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Creative Content Initiative</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">David Stevenson</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">12:00 - 13:00
																	<span class="fs-7 text-muted text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Lunch &amp; Learn Catch Up</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">Sean Bean</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">10:00 - 11:00
																	<span class="fs-7 text-muted text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Team Backlog Grooming Session</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">Karina Clarke</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
														<!--begin::Day-->
														<div id="kt_schedule_day_10" class="tab-pane fade show">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">12:00 - 13:00
																	<span class="fs-7 text-muted text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Development Team Capacity Review</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">Bob Harris</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">10:00 - 11:00
																	<span class="fs-7 text-muted text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Lunch &amp; Learn Catch Up</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">Mark Randall</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">12:00 - 13:00
																	<span class="fs-7 text-muted text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">Terry Robins</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-6">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-bold ms-5">
																	<!--begin::Time-->
																	<div class="fs-7 mb-1">13:00 - 14:00
																	<span class="fs-7 text-muted text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="fs-7 text-muted">Lead by
																	<a href="#">Karina Clarke</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-light bnt-active-light-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
													</div>
													<!--end::Tab Content-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card-->
											<!--begin::Tasks-->
											<div class="card card-flush mb-6 mb-xl-9">
												<!--begin::Card header-->
												<div class="card-header mt-6">
													<!--begin::Card title-->
													<div class="card-title flex-column">
														<h2 class="mb-1">User's Tasks</h2>
														<div class="fs-6 fw-bold text-muted">Total 25 tasks in backlog</div>
													</div>
													<!--end::Card title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar">
														<button type="button" class="btn btn-light-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_add_task">
														<!--begin::Svg Icon | path: icons/duotune/files/fil005.svg-->
														<span class="svg-icon svg-icon-3">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM16 13.5L12.5 13V10C12.5 9.4 12.6 9.5 12 9.5C11.4 9.5 11.5 9.4 11.5 10L11 13L8 13.5C7.4 13.5 7 13.4 7 14C7 14.6 7.4 14.5 8 14.5H11V18C11 18.6 11.4 19 12 19C12.6 19 12.5 18.6 12.5 18V14.5L16 14C16.6 14 17 14.6 17 14C17 13.4 16.6 13.5 16 13.5Z" fill="currentColor" />
																<rect x="11" y="19" width="10" height="2" rx="1" transform="rotate(-90 11 19)" fill="currentColor" />
																<rect x="7" y="13" width="10" height="2" rx="1" fill="currentColor" />
																<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->Add Task</button>
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body d-flex flex-column">
													<!--begin::Item-->
													<div class="d-flex align-items-center position-relative mb-7">
														<!--begin::Label-->
														<div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
														<!--end::Label-->
														<!--begin::Details-->
														<div class="fw-bold ms-5">
															<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary">Create FureStibe branding logo</a>
															<!--begin::Info-->
															<div class="fs-7 text-muted">Due in 1 day
															<a href="#">Karina Clark</a></div>
															<!--end::Info-->
														</div>
														<!--end::Details-->
														<!--begin::Menu-->
														<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
															<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
															<span class="svg-icon svg-icon-3">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
																	<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</button>
														<!--begin::Task menu-->
														<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
															<!--begin::Header-->
															<div class="px-7 py-5">
																<div class="fs-5 text-dark fw-bolder">Update Status</div>
															</div>
															<!--end::Header-->
															<!--begin::Menu separator-->
															<div class="separator border-gray-200"></div>
															<!--end::Menu separator-->
															<!--begin::Form-->
															<form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
																<!--begin::Input group-->
																<div class="fv-row mb-10">
																	<!--begin::Label-->
																	<label class="form-label fs-6 fw-bold">Status:</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<select class="form-select form-select-solid" name="task_status" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-hide-search="true">
																		<option></option>
																		<option value="1">Approved</option>
																		<option value="2">Pending</option>
																		<option value="3">In Process</option>
																		<option value="4">Rejected</option>
																	</select>
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
																<!--begin::Actions-->
																<div class="d-flex justify-content-end">
																	<button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">Reset</button>
																	<button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">
																		<span class="indicator-label">Apply</span>
																		<span class="indicator-progress">Please wait...
																		<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																	</button>
																</div>
																<!--end::Actions-->
															</form>
															<!--end::Form-->
														</div>
														<!--end::Task menu-->
														<!--end::Menu-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center position-relative mb-7">
														<!--begin::Label-->
														<div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
														<!--end::Label-->
														<!--begin::Details-->
														<div class="fw-bold ms-5">
															<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary">Schedule a meeting with FireBear CTO John</a>
															<!--begin::Info-->
															<div class="fs-7 text-muted">Due in 3 days
															<a href="#">Rober Doe</a></div>
															<!--end::Info-->
														</div>
														<!--end::Details-->
														<!--begin::Menu-->
														<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
															<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
															<span class="svg-icon svg-icon-3">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
																	<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</button>
														<!--begin::Task menu-->
														<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
															<!--begin::Header-->
															<div class="px-7 py-5">
																<div class="fs-5 text-dark fw-bolder">Update Status</div>
															</div>
															<!--end::Header-->
															<!--begin::Menu separator-->
															<div class="separator border-gray-200"></div>
															<!--end::Menu separator-->
															<!--begin::Form-->
															<form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
																<!--begin::Input group-->
																<div class="fv-row mb-10">
																	<!--begin::Label-->
																	<label class="form-label fs-6 fw-bold">Status:</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<select class="form-select form-select-solid" name="task_status" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-hide-search="true">
																		<option></option>
																		<option value="1">Approved</option>
																		<option value="2">Pending</option>
																		<option value="3">In Process</option>
																		<option value="4">Rejected</option>
																	</select>
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
																<!--begin::Actions-->
																<div class="d-flex justify-content-end">
																	<button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">Reset</button>
																	<button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">
																		<span class="indicator-label">Apply</span>
																		<span class="indicator-progress">Please wait...
																		<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																	</button>
																</div>
																<!--end::Actions-->
															</form>
															<!--end::Form-->
														</div>
														<!--end::Task menu-->
														<!--end::Menu-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center position-relative mb-7">
														<!--begin::Label-->
														<div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
														<!--end::Label-->
														<!--begin::Details-->
														<div class="fw-bold ms-5">
															<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary">9 Degree Project Estimation</a>
															<!--begin::Info-->
															<div class="fs-7 text-muted">Due in 1 week
															<a href="#">Neil Owen</a></div>
															<!--end::Info-->
														</div>
														<!--end::Details-->
														<!--begin::Menu-->
														<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
															<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
															<span class="svg-icon svg-icon-3">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
																	<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</button>
														<!--begin::Task menu-->
														<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
															<!--begin::Header-->
															<div class="px-7 py-5">
																<div class="fs-5 text-dark fw-bolder">Update Status</div>
															</div>
															<!--end::Header-->
															<!--begin::Menu separator-->
															<div class="separator border-gray-200"></div>
															<!--end::Menu separator-->
															<!--begin::Form-->
															<form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
																<!--begin::Input group-->
																<div class="fv-row mb-10">
																	<!--begin::Label-->
																	<label class="form-label fs-6 fw-bold">Status:</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<select class="form-select form-select-solid" name="task_status" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-hide-search="true">
																		<option></option>
																		<option value="1">Approved</option>
																		<option value="2">Pending</option>
																		<option value="3">In Process</option>
																		<option value="4">Rejected</option>
																	</select>
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
																<!--begin::Actions-->
																<div class="d-flex justify-content-end">
																	<button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">Reset</button>
																	<button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">
																		<span class="indicator-label">Apply</span>
																		<span class="indicator-progress">Please wait...
																		<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																	</button>
																</div>
																<!--end::Actions-->
															</form>
															<!--end::Form-->
														</div>
														<!--end::Task menu-->
														<!--end::Menu-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center position-relative mb-7">
														<!--begin::Label-->
														<div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
														<!--end::Label-->
														<!--begin::Details-->
														<div class="fw-bold ms-5">
															<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary">Dashboard UI &amp; UX for Leafr CRM</a>
															<!--begin::Info-->
															<div class="fs-7 text-muted">Due in 1 week
															<a href="#">Olivia Wild</a></div>
															<!--end::Info-->
														</div>
														<!--end::Details-->
														<!--begin::Menu-->
														<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
															<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
															<span class="svg-icon svg-icon-3">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
																	<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</button>
														<!--begin::Task menu-->
														<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
															<!--begin::Header-->
															<div class="px-7 py-5">
																<div class="fs-5 text-dark fw-bolder">Update Status</div>
															</div>
															<!--end::Header-->
															<!--begin::Menu separator-->
															<div class="separator border-gray-200"></div>
															<!--end::Menu separator-->
															<!--begin::Form-->
															<form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
																<!--begin::Input group-->
																<div class="fv-row mb-10">
																	<!--begin::Label-->
																	<label class="form-label fs-6 fw-bold">Status:</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<select class="form-select form-select-solid" name="task_status" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-hide-search="true">
																		<option></option>
																		<option value="1">Approved</option>
																		<option value="2">Pending</option>
																		<option value="3">In Process</option>
																		<option value="4">Rejected</option>
																	</select>
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
																<!--begin::Actions-->
																<div class="d-flex justify-content-end">
																	<button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">Reset</button>
																	<button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">
																		<span class="indicator-label">Apply</span>
																		<span class="indicator-progress">Please wait...
																		<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																	</button>
																</div>
																<!--end::Actions-->
															</form>
															<!--end::Form-->
														</div>
														<!--end::Task menu-->
														<!--end::Menu-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center position-relative">
														<!--begin::Label-->
														<div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
														<!--end::Label-->
														<!--begin::Details-->
														<div class="fw-bold ms-5">
															<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary">Mivy App R&amp;D, Meeting with clients</a>
															<!--begin::Info-->
															<div class="fs-7 text-muted">Due in 2 weeks
															<a href="#">Sean Bean</a></div>
															<!--end::Info-->
														</div>
														<!--end::Details-->
														<!--begin::Menu-->
														<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
															<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
															<span class="svg-icon svg-icon-3">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
																	<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</button>
														<!--begin::Task menu-->
														<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
															<!--begin::Header-->
															<div class="px-7 py-5">
																<div class="fs-5 text-dark fw-bolder">Update Status</div>
															</div>
															<!--end::Header-->
															<!--begin::Menu separator-->
															<div class="separator border-gray-200"></div>
															<!--end::Menu separator-->
															<!--begin::Form-->
															<form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
																<!--begin::Input group-->
																<div class="fv-row mb-10">
																	<!--begin::Label-->
																	<label class="form-label fs-6 fw-bold">Status:</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<select class="form-select form-select-solid" name="task_status" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-hide-search="true">
																		<option></option>
																		<option value="1">Approved</option>
																		<option value="2">Pending</option>
																		<option value="3">In Process</option>
																		<option value="4">Rejected</option>
																	</select>
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
																<!--begin::Actions-->
																<div class="d-flex justify-content-end">
																	<button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">Reset</button>
																	<button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">
																		<span class="indicator-label">Apply</span>
																		<span class="indicator-progress">Please wait...
																		<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																	</button>
																</div>
																<!--end::Actions-->
															</form>
															<!--end::Form-->
														</div>
														<!--end::Task menu-->
														<!--end::Menu-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Tasks-->
										</div>
										<!--end:::Tab pane-->
										<!--begin:::Tab pane-->
										<div class="tab-pane fade" id="kt_user_view_overview_security" role="tabpanel">
											<!--begin::Card-->
											<div class="card pt-4 mb-6 mb-xl-9">
												<!--begin::Card header-->
												<div class="card-header border-0">
													<!--begin::Card title-->
													<div class="card-title">
														<h2>Profile</h2>
													</div>
													<!--end::Card title-->
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body pt-0 pb-5">
													<!--begin::Table wrapper-->
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table align-middle table-row-dashed gy-5" id="kt_table_users_login_session">
															<!--begin::Table body-->
															<tbody class="fs-6 fw-bold text-gray-600">
																<tr>
																	<td>Email</td>
																	<td>smith@kpmg.com</td>
																	<td class="text-end">
																		<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_update_email">
																			<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																			<span class="svg-icon svg-icon-3">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
																					<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</button>
																	</td>
																</tr>
																<tr>
																	<td>Password</td>
																	<td>******</td>
																	<td class="text-end">
																		<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_update_password">
																			<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																			<span class="svg-icon svg-icon-3">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
																					<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</button>
																	</td>
																</tr>
																<tr>
																	<td>Role</td>
																	<td>Administrator</td>
																	<td class="text-end">
																		<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">
																			<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																			<span class="svg-icon svg-icon-3">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
																					<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</button>
																	</td>
																</tr>
															</tbody>
															<!--end::Table body-->
														</table>
														<!--end::Table-->
													</div>
													<!--end::Table wrapper-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card-->
											<!--begin::Card-->
											<div class="card pt-4 mb-6 mb-xl-9">
												<!--begin::Card header-->
												<div class="card-header border-0">
													<!--begin::Card title-->
													<div class="card-title flex-column">
														<h2 class="mb-1">Two Step Authentication</h2>
														<div class="fs-6 fw-bold text-muted">Keep your account extra secure with a second authentication step.</div>
													</div>
													<!--end::Card title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar">
														<!--begin::Add-->
														<button type="button" class="btn btn-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
														<!--begin::Svg Icon | path: icons/duotune/technology/teh004.svg-->
														<span class="svg-icon svg-icon-3">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M21 10.7192H3C2.4 10.7192 2 11.1192 2 11.7192C2 12.3192 2.4 12.7192 3 12.7192H6V14.7192C6 18.0192 8.7 20.7192 12 20.7192C15.3 20.7192 18 18.0192 18 14.7192V12.7192H21C21.6 12.7192 22 12.3192 22 11.7192C22 11.1192 21.6 10.7192 21 10.7192Z" fill="currentColor" />
																<path d="M11.6 21.9192C11.4 21.9192 11.2 21.8192 11 21.7192C10.6 21.4192 10.5 20.7191 10.8 20.3191C11.7 19.1191 12.3 17.8191 12.7 16.3191C12.8 15.8191 13.4 15.4192 13.9 15.6192C14.4 15.7192 14.8 16.3191 14.6 16.8191C14.2 18.5191 13.4 20.1192 12.4 21.5192C12.2 21.7192 11.9 21.9192 11.6 21.9192ZM8.7 19.7192C10.2 18.1192 11 15.9192 11 13.7192V8.71917C11 8.11917 11.4 7.71917 12 7.71917C12.6 7.71917 13 8.11917 13 8.71917V13.0192C13 13.6192 13.4 14.0192 14 14.0192C14.6 14.0192 15 13.6192 15 13.0192V8.71917C15 7.01917 13.7 5.71917 12 5.71917C10.3 5.71917 9 7.01917 9 8.71917V13.7192C9 15.4192 8.4 17.1191 7.2 18.3191C6.8 18.7191 6.9 19.3192 7.3 19.7192C7.5 19.9192 7.7 20.0192 8 20.0192C8.3 20.0192 8.5 19.9192 8.7 19.7192ZM6 16.7192C6.5 16.7192 7 16.2192 7 15.7192V8.71917C7 8.11917 7.1 7.51918 7.3 6.91918C7.5 6.41918 7.2 5.8192 6.7 5.6192C6.2 5.4192 5.59999 5.71917 5.39999 6.21917C5.09999 7.01917 5 7.81917 5 8.71917V15.7192V15.8191C5 16.3191 5.5 16.7192 6 16.7192ZM9 4.71917C9.5 4.31917 10.1 4.11918 10.7 3.91918C11.2 3.81918 11.5 3.21917 11.4 2.71917C11.3 2.21917 10.7 1.91916 10.2 2.01916C9.4 2.21916 8.59999 2.6192 7.89999 3.1192C7.49999 3.4192 7.4 4.11916 7.7 4.51916C7.9 4.81916 8.2 4.91918 8.5 4.91918C8.6 4.91918 8.8 4.81917 9 4.71917ZM18.2 18.9192C18.7 17.2192 19 15.5192 19 13.7192V8.71917C19 5.71917 17.1 3.1192 14.3 2.1192C13.8 1.9192 13.2 2.21917 13 2.71917C12.8 3.21917 13.1 3.81916 13.6 4.01916C15.6 4.71916 17 6.61917 17 8.71917V13.7192C17 15.3192 16.8 16.8191 16.3 18.3191C16.1 18.8191 16.4 19.4192 16.9 19.6192C17 19.6192 17.1 19.6192 17.2 19.6192C17.7 19.6192 18 19.3192 18.2 18.9192Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->Add Authentication Step</button>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-6 w-200px py-4" data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_add_auth_app">Use authenticator app</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_add_one_time_password">Enable one-time password</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
														<!--end::Add-->
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body pb-5">
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Content-->
														<div class="d-flex flex-column">
															<span>SMS</span>
															<span class="text-muted fs-6">+61 412 345 678</span>
														</div>
														<!--end::Content-->
														<!--begin::Action-->
														<div class="d-flex justify-content-end align-items-center">
															<!--begin::Button-->
															<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto me-5" data-bs-toggle="modal" data-bs-target="#kt_modal_add_one_time_password">
																<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																<span class="svg-icon svg-icon-3">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
																		<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</button>
															<!--end::Button-->
															<!--begin::Button-->
															<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" id="kt_users_delete_two_step">
																<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
																<span class="svg-icon svg-icon-3">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
																		<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
																		<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</button>
															<!--end::Button-->
														</div>
														<!--end::Action-->
													</div>
													<!--end::Item-->
													<!--begin:Separator-->
													<div class="separator separator-dashed my-5"></div>
													<!--end:Separator-->
													<!--begin::Disclaimer-->
													<div class="text-gray-600">If you lose your mobile device or security key, you can
													<a href='#' class="me-1">generate a backup code</a>to sign in to your account.</div>
													<!--end::Disclaimer-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card-->
											<!--begin::Card-->
											<div class="card pt-4 mb-6 mb-xl-9">
												<!--begin::Card header-->
												<div class="card-header border-0">
													<!--begin::Card title-->
													<div class="card-title flex-column">
														<h2>Email Notifications</h2>
														<div class="fs-6 fw-bold text-muted">Choose what messages you’d like to receive for each of your accounts.</div>
													</div>
													<!--end::Card title-->
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body">
													<!--begin::Form-->
													<form class="form" id="kt_users_email_notification_form">
														<!--begin::Item-->
														<div class="d-flex">
															<!--begin::Checkbox-->
															<div class="form-check form-check-custom form-check-solid">
																<!--begin::Input-->
																<input class="form-check-input me-3" name="email_notification_0" type="checkbox" value="0" id="kt_modal_update_email_notification_0" checked='checked' />
																<!--end::Input-->
																<!--begin::Label-->
																<label class="form-check-label" for="kt_modal_update_email_notification_0">
																	<div class="fw-bolder">Successful Payments</div>
																	<div class="text-gray-600">Receive a notification for every successful payment.</div>
																</label>
																<!--end::Label-->
															</div>
															<!--end::Checkbox-->
														</div>
														<!--end::Item-->
														<div class='separator separator-dashed my-5'></div>
														<!--begin::Item-->
														<div class="d-flex">
															<!--begin::Checkbox-->
															<div class="form-check form-check-custom form-check-solid">
																<!--begin::Input-->
																<input class="form-check-input me-3" name="email_notification_1" type="checkbox" value="1" id="kt_modal_update_email_notification_1" />
																<!--end::Input-->
																<!--begin::Label-->
																<label class="form-check-label" for="kt_modal_update_email_notification_1">
																	<div class="fw-bolder">Payouts</div>
																	<div class="text-gray-600">Receive a notification for every initiated payout.</div>
																</label>
																<!--end::Label-->
															</div>
															<!--end::Checkbox-->
														</div>
														<!--end::Item-->
														<div class='separator separator-dashed my-5'></div>
														<!--begin::Item-->
														<div class="d-flex">
															<!--begin::Checkbox-->
															<div class="form-check form-check-custom form-check-solid">
																<!--begin::Input-->
																<input class="form-check-input me-3" name="email_notification_2" type="checkbox" value="2" id="kt_modal_update_email_notification_2" />
																<!--end::Input-->
																<!--begin::Label-->
																<label class="form-check-label" for="kt_modal_update_email_notification_2">
																	<div class="fw-bolder">Application fees</div>
																	<div class="text-gray-600">Receive a notification each time you collect a fee from an account.</div>
																</label>
																<!--end::Label-->
															</div>
															<!--end::Checkbox-->
														</div>
														<!--end::Item-->
														<div class='separator separator-dashed my-5'></div>
														<!--begin::Item-->
														<div class="d-flex">
															<!--begin::Checkbox-->
															<div class="form-check form-check-custom form-check-solid">
																<!--begin::Input-->
																<input class="form-check-input me-3" name="email_notification_3" type="checkbox" value="3" id="kt_modal_update_email_notification_3" checked='checked' />
																<!--end::Input-->
																<!--begin::Label-->
																<label class="form-check-label" for="kt_modal_update_email_notification_3">
																	<div class="fw-bolder">Disputes</div>
																	<div class="text-gray-600">Receive a notification if a payment is disputed by a customer and for dispute resolutions.</div>
																</label>
																<!--end::Label-->
															</div>
															<!--end::Checkbox-->
														</div>
														<!--end::Item-->
														<div class='separator separator-dashed my-5'></div>
														<!--begin::Item-->
														<div class="d-flex">
															<!--begin::Checkbox-->
															<div class="form-check form-check-custom form-check-solid">
																<!--begin::Input-->
																<input class="form-check-input me-3" name="email_notification_4" type="checkbox" value="4" id="kt_modal_update_email_notification_4" checked='checked' />
																<!--end::Input-->
																<!--begin::Label-->
																<label class="form-check-label" for="kt_modal_update_email_notification_4">
																	<div class="fw-bolder">Payment reviews</div>
																	<div class="text-gray-600">Receive a notification if a payment is marked as an elevated risk.</div>
																</label>
																<!--end::Label-->
															</div>
															<!--end::Checkbox-->
														</div>
														<!--end::Item-->
														<div class='separator separator-dashed my-5'></div>
														<!--begin::Item-->
														<div class="d-flex">
															<!--begin::Checkbox-->
															<div class="form-check form-check-custom form-check-solid">
																<!--begin::Input-->
																<input class="form-check-input me-3" name="email_notification_5" type="checkbox" value="5" id="kt_modal_update_email_notification_5" />
																<!--end::Input-->
																<!--begin::Label-->
																<label class="form-check-label" for="kt_modal_update_email_notification_5">
																	<div class="fw-bolder">Mentions</div>
																	<div class="text-gray-600">Receive a notification if a teammate mentions you in a note.</div>
																</label>
																<!--end::Label-->
															</div>
															<!--end::Checkbox-->
														</div>
														<!--end::Item-->
														<div class='separator separator-dashed my-5'></div>
														<!--begin::Item-->
														<div class="d-flex">
															<!--begin::Checkbox-->
															<div class="form-check form-check-custom form-check-solid">
																<!--begin::Input-->
																<input class="form-check-input me-3" name="email_notification_6" type="checkbox" value="6" id="kt_modal_update_email_notification_6" />
																<!--end::Input-->
																<!--begin::Label-->
																<label class="form-check-label" for="kt_modal_update_email_notification_6">
																	<div class="fw-bolder">Invoice Mispayments</div>
																	<div class="text-gray-600">Receive a notification if a customer sends an incorrect amount to pay their invoice.</div>
																</label>
																<!--end::Label-->
															</div>
															<!--end::Checkbox-->
														</div>
														<!--end::Item-->
														<div class='separator separator-dashed my-5'></div>
														<!--begin::Item-->
														<div class="d-flex">
															<!--begin::Checkbox-->
															<div class="form-check form-check-custom form-check-solid">
																<!--begin::Input-->
																<input class="form-check-input me-3" name="email_notification_7" type="checkbox" value="7" id="kt_modal_update_email_notification_7" />
																<!--end::Input-->
																<!--begin::Label-->
																<label class="form-check-label" for="kt_modal_update_email_notification_7">
																	<div class="fw-bolder">Webhooks</div>
																	<div class="text-gray-600">Receive notifications about consistently failing webhook endpoints.</div>
																</label>
																<!--end::Label-->
															</div>
															<!--end::Checkbox-->
														</div>
														<!--end::Item-->
														<div class='separator separator-dashed my-5'></div>
														<!--begin::Item-->
														<div class="d-flex">
															<!--begin::Checkbox-->
															<div class="form-check form-check-custom form-check-solid">
																<!--begin::Input-->
																<input class="form-check-input me-3" name="email_notification_8" type="checkbox" value="8" id="kt_modal_update_email_notification_8" />
																<!--end::Input-->
																<!--begin::Label-->
																<label class="form-check-label" for="kt_modal_update_email_notification_8">
																	<div class="fw-bolder">Trial</div>
																	<div class="text-gray-600">Receive helpful tips when you try out our products.</div>
																</label>
																<!--end::Label-->
															</div>
															<!--end::Checkbox-->
														</div>
														<!--end::Item-->
														<!--begin::Action buttons-->
														<div class="d-flex justify-content-end align-items-center mt-12">
															<!--begin::Button-->
															<button type="button" class="btn btn-light me-5" id="kt_users_email_notification_cancel">Cancel</button>
															<!--end::Button-->
															<!--begin::Button-->
															<button type="button" class="btn btn-primary" id="kt_users_email_notification_submit">
																<span class="indicator-label">Save</span>
																<span class="indicator-progress">Please wait...
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
															</button>
															<!--end::Button-->
														</div>
														<!--begin::Action buttons-->
													</form>
													<!--end::Form-->
												</div>
												<!--end::Card body-->
												<!--begin::Card footer-->
												<!--end::Card footer-->
											</div>
											<!--end::Card-->
										</div>
										<!--end:::Tab pane-->
										<!--begin:::Tab pane-->
										<div class="tab-pane fade" id="kt_user_view_overview_events_and_logs_tab" role="tabpanel">
											<!--begin::Card-->
											<div class="card pt-4 mb-6 mb-xl-9">
												<!--begin::Card header-->
												<div class="card-header border-0">
													<!--begin::Card title-->
													<div class="card-title">
														<h2>Login Sessions</h2>
													</div>
													<!--end::Card title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar">
														<!--begin::Filter-->
														<button type="button" class="btn btn-sm btn-flex btn-light-primary" id="kt_modal_sign_out_sesions">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr077.svg-->
														<span class="svg-icon svg-icon-3">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.3" x="4" y="11" width="12" height="2" rx="1" fill="currentColor" />
																<path d="M5.86875 11.6927L7.62435 10.2297C8.09457 9.83785 8.12683 9.12683 7.69401 8.69401C7.3043 8.3043 6.67836 8.28591 6.26643 8.65206L3.34084 11.2526C2.89332 11.6504 2.89332 12.3496 3.34084 12.7474L6.26643 15.3479C6.67836 15.7141 7.3043 15.6957 7.69401 15.306C8.12683 14.8732 8.09458 14.1621 7.62435 13.7703L5.86875 12.3073C5.67684 12.1474 5.67684 11.8526 5.86875 11.6927Z" fill="currentColor" />
																<path d="M8 5V6C8 6.55228 8.44772 7 9 7C9.55228 7 10 6.55228 10 6C10 5.44772 10.4477 5 11 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H11C10.4477 19 10 18.5523 10 18C10 17.4477 9.55228 17 9 17C8.44772 17 8 17.4477 8 18V19C8 20.1046 8.89543 21 10 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H10C8.89543 3 8 3.89543 8 5Z" fill="#C4C4C4" />
															</svg>
														</span>
														<!--end::Svg Icon-->Sign out all sessions</button>
														<!--end::Filter-->
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body pt-0 pb-5">
													<!--begin::Table wrapper-->
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table align-middle table-row-dashed gy-5" id="kt_table_users_login_session">
															<!--begin::Table head-->
															<thead class="border-bottom border-gray-200 fs-7 fw-bolder">
																<!--begin::Table row-->
																<tr class="text-start text-muted text-uppercase gs-0">
																	<th class="min-w-100px">Location</th>
																	<th>Device</th>
																	<th>IP Address</th>
																	<th class="min-w-125px">Time</th>
																	<th class="min-w-70px">Actions</th>
																</tr>
																<!--end::Table row-->
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody class="fs-6 fw-bold text-gray-600">
																<tr>
																	<!--begin::Invoice=-->
																	<td>Australia</td>
																	<!--end::Invoice=-->
																	<!--begin::Status=-->
																	<td>Chome - Windows</td>
																	<!--end::Status=-->
																	<!--begin::Amount=-->
																	<td>207.48.37.154</td>
																	<!--end::Amount=-->
																	<!--begin::Date=-->
																	<td>23 seconds ago</td>
																	<!--end::Date=-->
																	<!--begin::Action=-->
																	<td>Current session</td>
																	<!--end::Action=-->
																</tr>
																<tr>
																	<!--begin::Invoice=-->
																	<td>Australia</td>
																	<!--end::Invoice=-->
																	<!--begin::Status=-->
																	<td>Safari - iOS</td>
																	<!--end::Status=-->
																	<!--begin::Amount=-->
																	<td>207.41.18.194</td>
																	<!--end::Amount=-->
																	<!--begin::Date=-->
																	<td>3 days ago</td>
																	<!--end::Date=-->
																	<!--begin::Action=-->
																	<td>
																		<a href="#" data-kt-users-sign-out="single_user">Sign out</a>
																	</td>
																	<!--end::Action=-->
																</tr>
																<tr>
																	<!--begin::Invoice=-->
																	<td>Australia</td>
																	<!--end::Invoice=-->
																	<!--begin::Status=-->
																	<td>Chrome - Windows</td>
																	<!--end::Status=-->
																	<!--begin::Amount=-->
																	<td>207.32.18.211</td>
																	<!--end::Amount=-->
																	<!--begin::Date=-->
																	<td>last week</td>
																	<!--end::Date=-->
																	<!--begin::Action=-->
																	<td>Expired</td>
																	<!--end::Action=-->
																</tr>
															</tbody>
															<!--end::Table body-->
														</table>
														<!--end::Table-->
													</div>
													<!--end::Table wrapper-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card-->
											<!--begin::Card-->
											<div class="card pt-4 mb-6 mb-xl-9">
												<!--begin::Card header-->
												<div class="card-header border-0">
													<!--begin::Card title-->
													<div class="card-title">
														<h2>Logs</h2>
													</div>
													<!--end::Card title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar">
														<!--begin::Button-->
														<button type="button" class="btn btn-sm btn-light-primary">
														<!--begin::Svg Icon | path: icons/duotune/files/fil021.svg-->
														<span class="svg-icon svg-icon-3">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M19 15C20.7 15 22 13.7 22 12C22 10.3 20.7 9 19 9C18.9 9 18.9 9 18.8 9C18.9 8.7 19 8.3 19 8C19 6.3 17.7 5 16 5C15.4 5 14.8 5.2 14.3 5.5C13.4 4 11.8 3 10 3C7.2 3 5 5.2 5 8C5 8.3 5 8.7 5.1 9H5C3.3 9 2 10.3 2 12C2 13.7 3.3 15 5 15H19Z" fill="currentColor" />
																<path d="M13 17.4V12C13 11.4 12.6 11 12 11C11.4 11 11 11.4 11 12V17.4H13Z" fill="currentColor" />
																<path opacity="0.3" d="M8 17.4H16L12.7 20.7C12.3 21.1 11.7 21.1 11.3 20.7L8 17.4Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->Download Report</button>
														<!--end::Button-->
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body py-0">
													<!--begin::Table wrapper-->
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table align-middle table-row-dashed fw-bold text-gray-600 fs-6 gy-5" id="kt_table_users_logs">
															<!--begin::Table body-->
															<tbody>
																<!--begin::Table row-->
																<tr>
																	<!--begin::Badge=-->
																	<td class="min-w-70px">
																		<div class="badge badge-light-warning">404 WRN</div>
																	</td>
																	<!--end::Badge=-->
																	<!--begin::Status=-->
																	<td>POST /v1/customer/c_62445792c672d/not_found</td>
																	<!--end::Status=-->
																	<!--begin::Timestamp=-->
																	<td class="pe-0 text-end min-w-200px">10 Nov 2022, 11:30 am</td>
																	<!--end::Timestamp=-->
																</tr>
																<!--end::Table row-->
																<!--begin::Table row-->
																<tr>
																	<!--begin::Badge=-->
																	<td class="min-w-70px">
																		<div class="badge badge-light-success">200 OK</div>
																	</td>
																	<!--end::Badge=-->
																	<!--begin::Status=-->
																	<td>POST /v1/invoices/in_2935_9592/payment</td>
																	<!--end::Status=-->
																	<!--begin::Timestamp=-->
																	<td class="pe-0 text-end min-w-200px">05 May 2022, 11:05 am</td>
																	<!--end::Timestamp=-->
																</tr>
																<!--end::Table row-->
																<!--begin::Table row-->
																<tr>
																	<!--begin::Badge=-->
																	<td class="min-w-70px">
																		<div class="badge badge-light-success">200 OK</div>
																	</td>
																	<!--end::Badge=-->
																	<!--begin::Status=-->
																	<td>POST /v1/invoices/in_3816_3725/payment</td>
																	<!--end::Status=-->
																	<!--begin::Timestamp=-->
																	<td class="pe-0 text-end min-w-200px">20 Dec 2022, 5:30 pm</td>
																	<!--end::Timestamp=-->
																</tr>
																<!--end::Table row-->
																<!--begin::Table row-->
																<tr>
																	<!--begin::Badge=-->
																	<td class="min-w-70px">
																		<div class="badge badge-light-warning">404 WRN</div>
																	</td>
																	<!--end::Badge=-->
																	<!--begin::Status=-->
																	<td>POST /v1/customer/c_62445792c672e/not_found</td>
																	<!--end::Status=-->
																	<!--begin::Timestamp=-->
																	<td class="pe-0 text-end min-w-200px">25 Jul 2022, 6:43 am</td>
																	<!--end::Timestamp=-->
																</tr>
																<!--end::Table row-->
																<!--begin::Table row-->
																<tr>
																	<!--begin::Badge=-->
																	<td class="min-w-70px">
																		<div class="badge badge-light-danger">500 ERR</div>
																	</td>
																	<!--end::Badge=-->
																	<!--begin::Status=-->
																	<td>POST /v1/invoice/in_8810_2053/invalid</td>
																	<!--end::Status=-->
																	<!--begin::Timestamp=-->
																	<td class="pe-0 text-end min-w-200px">25 Jul 2022, 8:43 pm</td>
																	<!--end::Timestamp=-->
																</tr>
																<!--end::Table row-->
															</tbody>
															<!--end::Table body-->
														</table>
														<!--end::Table-->
													</div>
													<!--end::Table wrapper-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card-->
											<!--begin::Card-->
											<div class="card pt-4 mb-6 mb-xl-9">
												<!--begin::Card header-->
												<div class="card-header border-0">
													<!--begin::Card title-->
													<div class="card-title">
														<h2>Events</h2>
													</div>
													<!--end::Card title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar">
														<!--begin::Button-->
														<button type="button" class="btn btn-sm btn-light-primary">
														<!--begin::Svg Icon | path: icons/duotune/files/fil021.svg-->
														<span class="svg-icon svg-icon-3">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M19 15C20.7 15 22 13.7 22 12C22 10.3 20.7 9 19 9C18.9 9 18.9 9 18.8 9C18.9 8.7 19 8.3 19 8C19 6.3 17.7 5 16 5C15.4 5 14.8 5.2 14.3 5.5C13.4 4 11.8 3 10 3C7.2 3 5 5.2 5 8C5 8.3 5 8.7 5.1 9H5C3.3 9 2 10.3 2 12C2 13.7 3.3 15 5 15H19Z" fill="currentColor" />
																<path d="M13 17.4V12C13 11.4 12.6 11 12 11C11.4 11 11 11.4 11 12V17.4H13Z" fill="currentColor" />
																<path opacity="0.3" d="M8 17.4H16L12.7 20.7C12.3 21.1 11.7 21.1 11.3 20.7L8 17.4Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->Download Report</button>
														<!--end::Button-->
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body py-0">
													<!--begin::Table-->
													<table class="table align-middle table-row-dashed fs-6 text-gray-600 fw-bold gy-5" id="kt_table_customers_events">
														<!--begin::Table body-->
														<tbody>
															<!--begin::Table row-->
															<tr>
																<!--begin::Event=-->
																<td class="min-w-400px">Invoice
																<a href="#" class="fw-bolder text-gray-900 text-hover-primary me-1">#LOP-45640</a>has been
																<span class="badge badge-light-danger">Declined</span></td>
																<!--end::Event=-->
																<!--begin::Timestamp=-->
																<td class="pe-0 text-gray-600 text-end min-w-200px">21 Feb 2022, 8:43 pm</td>
																<!--end::Timestamp=-->
															</tr>
															<!--end::Table row-->
															<!--begin::Table row-->
															<tr>
																<!--begin::Event=-->
																<td class="min-w-400px">Invoice
																<a href="#" class="fw-bolder text-gray-900 text-hover-primary me-1">#SEP-45656</a>status has changed from
																<span class="badge badge-light-warning me-1">Pending</span>to
																<span class="badge badge-light-info">In Progress</span></td>
																<!--end::Event=-->
																<!--begin::Timestamp=-->
																<td class="pe-0 text-gray-600 text-end min-w-200px">19 Aug 2022, 9:23 pm</td>
																<!--end::Timestamp=-->
															</tr>
															<!--end::Table row-->
															<!--begin::Table row-->
															<tr>
																<!--begin::Event=-->
																<td class="min-w-400px">Invoice
																<a href="#" class="fw-bolder text-gray-900 text-hover-primary me-1">#LOP-45640</a>has been
																<span class="badge badge-light-danger">Declined</span></td>
																<!--end::Event=-->
																<!--begin::Timestamp=-->
																<td class="pe-0 text-gray-600 text-end min-w-200px">25 Oct 2022, 11:30 am</td>
																<!--end::Timestamp=-->
															</tr>
															<!--end::Table row-->
															<!--begin::Table row-->
															<tr>
																<!--begin::Event=-->
																<td class="min-w-400px">Invoice
																<a href="#" class="fw-bolder text-gray-900 text-hover-primary me-1">#DER-45645</a>status has changed from
																<span class="badge badge-light-info me-1">In Progress</span>to
																<span class="badge badge-light-primary">In Transit</span></td>
																<!--end::Event=-->
																<!--begin::Timestamp=-->
																<td class="pe-0 text-gray-600 text-end min-w-200px">19 Aug 2022, 2:40 pm</td>
																<!--end::Timestamp=-->
															</tr>
															<!--end::Table row-->
															<!--begin::Table row-->
															<tr>
																<!--begin::Event=-->
																<td class="min-w-400px">Invoice
																<a href="#" class="fw-bolder text-gray-900 text-hover-primary me-1">#SEP-45656</a>status has changed from
																<span class="badge badge-light-warning me-1">Pending</span>to
																<span class="badge badge-light-info">In Progress</span></td>
																<!--end::Event=-->
																<!--begin::Timestamp=-->
																<td class="pe-0 text-gray-600 text-end min-w-200px">20 Dec 2022, 9:23 pm</td>
																<!--end::Timestamp=-->
															</tr>
															<!--end::Table row-->
															<!--begin::Table row-->
															<tr>
																<!--begin::Event=-->
																<td class="min-w-400px">Invoice
																<a href="#" class="fw-bolder text-gray-900 text-hover-primary me-1">#SEP-45656</a>status has changed from
																<span class="badge badge-light-warning me-1">Pending</span>to
																<span class="badge badge-light-info">In Progress</span></td>
																<!--end::Event=-->
																<!--begin::Timestamp=-->
																<td class="pe-0 text-gray-600 text-end min-w-200px">20 Dec 2022, 11:05 am</td>
																<!--end::Timestamp=-->
															</tr>
															<!--end::Table row-->
															<!--begin::Table row-->
															<tr>
																<!--begin::Event=-->
																<td class="min-w-400px">
																<a href="#" class="text-gray-600 text-hover-primary me-1">Emma Smith</a>has made payment to
																<a href="#" class="fw-bolder text-gray-900 text-hover-primary">#XRS-45670</a></td>
																<!--end::Event=-->
																<!--begin::Timestamp=-->
																<td class="pe-0 text-gray-600 text-end min-w-200px">22 Sep 2022, 2:40 pm</td>
																<!--end::Timestamp=-->
															</tr>
															<!--end::Table row-->
															<!--begin::Table row-->
															<tr>
																<!--begin::Event=-->
																<td class="min-w-400px">Invoice
																<a href="#" class="fw-bolder text-gray-900 text-hover-primary me-1">#WER-45670</a>is
																<span class="badge badge-light-info">In Progress</span></td>
																<!--end::Event=-->
																<!--begin::Timestamp=-->
																<td class="pe-0 text-gray-600 text-end min-w-200px">05 May 2022, 2:40 pm</td>
																<!--end::Timestamp=-->
															</tr>
															<!--end::Table row-->
															<!--begin::Table row-->
															<tr>
																<!--begin::Event=-->
																<td class="min-w-400px">
																<a href="#" class="text-gray-600 text-hover-primary me-1">Emma Smith</a>has made payment to
																<a href="#" class="fw-bolder text-gray-900 text-hover-primary">#XRS-45670</a></td>
																<!--end::Event=-->
																<!--begin::Timestamp=-->
																<td class="pe-0 text-gray-600 text-end min-w-200px">21 Feb 2022, 10:10 pm</td>
																<!--end::Timestamp=-->
															</tr>
															<!--end::Table row-->
															<!--begin::Table row-->
															<tr>
																<!--begin::Event=-->
																<td class="min-w-400px">Invoice
																<a href="#" class="fw-bolder text-gray-900 text-hover-primary me-1">#LOP-45640</a>has been
																<span class="badge badge-light-danger">Declined</span></td>
																<!--end::Event=-->
																<!--begin::Timestamp=-->
																<td class="pe-0 text-gray-600 text-end min-w-200px">22 Sep 2022, 9:23 pm</td>
																<!--end::Timestamp=-->
															</tr>
															<!--end::Table row-->
														</tbody>
														<!--end::Table body-->
													</table>
													<!--end::Table-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card-->
										</div>
										<!--end:::Tab pane-->
									</div>
									<!--end:::Tab content-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Layout-->
							<!--begin::Modals-->
							<!--begin::Modal - Update user details-->
							<div class="modal fade" id="kt_modal_update_details" tabindex="-1" aria-hidden="true">
								<!--begin::Modal dialog-->
								<div class="modal-dialog modal-dialog-centered mw-650px">
									<!--begin::Modal content-->
									<div class="modal-content">
										<!--begin::Form-->
										<form class="form" action="#" id="kt_modal_update_user_form">
											<!--begin::Modal header-->
											<div class="modal-header" id="kt_modal_update_user_header">
												<!--begin::Modal title-->
												<h2 class="fw-bolder">Update User Details</h2>
												<!--end::Modal title-->
												<!--begin::Close-->
												<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
													<span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
															<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Close-->
											</div>
											<!--end::Modal header-->
											<!--begin::Modal body-->
											<div class="modal-body py-10 px-lg-17">
												<!--begin::Scroll-->
												<div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_update_user_header" data-kt-scroll-wrappers="#kt_modal_update_user_scroll" data-kt-scroll-offset="300px">
													<!--begin::User toggle-->
													<div class="fw-boldest fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#kt_modal_update_user_user_info" role="button" aria-expanded="false" aria-controls="kt_modal_update_user_user_info">User Information
													<span class="ms-2 rotate-180">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
														<span class="svg-icon svg-icon-3">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span></div>
													<!--end::User toggle-->
													<!--begin::User form-->
													<div id="kt_modal_update_user_user_info" class="collapse show">
														<!--begin::Input group-->
														<div class="mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-bold mb-2">
																<span>Update Avatar</span>
																<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Allowed file types: png, jpg, jpeg."></i>
															</label>
															<!--end::Label-->
															<!--begin::Image input wrapper-->
															<div class="mt-1">
																<!--begin::Image input-->
																<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
																	<!--begin::Preview existing avatar-->
																	<div class="image-input-wrapper w-125px h-125px" style="background-image: url(assets/media/avatars/300-6.jpg"></div>
																	<!--end::Preview existing avatar-->
																	<!--begin::Edit-->
																	<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
																		<i class="bi bi-pencil-fill fs-7"></i>
																		<!--begin::Inputs-->
																		<input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
																		<input type="hidden" name="avatar_remove" />
																		<!--end::Inputs-->
																	</label>
																	<!--end::Edit-->
																	<!--begin::Cancel-->
																	<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
																		<i class="bi bi-x fs-2"></i>
																	</span>
																	<!--end::Cancel-->
																	<!--begin::Remove-->
																	<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
																		<i class="bi bi-x fs-2"></i>
																	</span>
																	<!--end::Remove-->
																</div>
																<!--end::Image input-->
															</div>
															<!--end::Image input wrapper-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-bold mb-2">Name</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" placeholder="" name="name" value="Emma Smith" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-bold mb-2">
																<span>Email</span>
																<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Email address must be active"></i>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="email" class="form-control form-control-solid" placeholder="" name="email" value="smith@kpmg.com" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-bold mb-2">Description</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" placeholder="" name="description" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-15">
															<!--begin::Label-->
															<label class="fs-6 fw-bold mb-2">Language</label>
															<!--end::Label-->
															<!--begin::Input-->
															<select name="language" aria-label="Select a Language" data-control="select2" data-placeholder="Select a Language..." class="form-select form-select-solid" data-dropdown-parent="#kt_modal_update_details">
																<option></option>
																<option value="id">Bahasa Indonesia - Indonesian</option>
																<option value="msa">Bahasa Melayu - Malay</option>
																<option value="ca">Català - Catalan</option>
																<option value="cs">Čeština - Czech</option>
																<option value="da">Dansk - Danish</option>
																<option value="de">Deutsch - German</option>
																<option value="en">English</option>
																<option value="en-gb">English UK - British English</option>
																<option value="es">Español - Spanish</option>
																<option value="fil">Filipino</option>
																<option value="fr">Français - French</option>
																<option value="ga">Gaeilge - Irish (beta)</option>
																<option value="gl">Galego - Galician (beta)</option>
																<option value="hr">Hrvatski - Croatian</option>
																<option value="it">Italiano - Italian</option>
																<option value="hu">Magyar - Hungarian</option>
																<option value="nl">Nederlands - Dutch</option>
																<option value="no">Norsk - Norwegian</option>
																<option value="pl">Polski - Polish</option>
																<option value="pt">Português - Portuguese</option>
																<option value="ro">Română - Romanian</option>
																<option value="sk">Slovenčina - Slovak</option>
																<option value="fi">Suomi - Finnish</option>
																<option value="sv">Svenska - Swedish</option>
																<option value="vi">Tiếng Việt - Vietnamese</option>
																<option value="tr">Türkçe - Turkish</option>
																<option value="el">Ελληνικά - Greek</option>
																<option value="bg">Български език - Bulgarian</option>
																<option value="ru">Русский - Russian</option>
																<option value="sr">Српски - Serbian</option>
																<option value="uk">Українська мова - Ukrainian</option>
																<option value="he">עִבְרִית - Hebrew</option>
																<option value="ur">اردو - Urdu (beta)</option>
																<option value="ar">العربية - Arabic</option>
																<option value="fa">فارسی - Persian</option>
																<option value="mr">मराठी - Marathi</option>
																<option value="hi">हिन्दी - Hindi</option>
																<option value="bn">বাংলা - Bangla</option>
																<option value="gu">ગુજરાતી - Gujarati</option>
																<option value="ta">தமிழ் - Tamil</option>
																<option value="kn">ಕನ್ನಡ - Kannada</option>
																<option value="th">ภาษาไทย - Thai</option>
																<option value="ko">한국어 - Korean</option>
																<option value="ja">日本語 - Japanese</option>
																<option value="zh-cn">简体中文 - Simplified Chinese</option>
																<option value="zh-tw">繁體中文 - Traditional Chinese</option>
															</select>
															<!--end::Input-->
														</div>
														<!--end::Input group-->
													</div>
													<!--end::User form-->
													<!--begin::Address toggle-->
													<div class="fw-boldest fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#kt_modal_update_user_address" role="button" aria-expanded="false" aria-controls="kt_modal_update_user_address">Address Details
													<span class="ms-2 rotate-180">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
														<span class="svg-icon svg-icon-3">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span></div>
													<!--end::Address toggle-->
													<!--begin::Address form-->
													<div id="kt_modal_update_user_address" class="collapse show">
														<!--begin::Input group-->
														<div class="d-flex flex-column mb-7 fv-row">
															<!--begin::Label-->
															<label class="fs-6 fw-bold mb-2">Address Line 1</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input class="form-control form-control-solid" placeholder="" name="address1" value="101, Collins Street" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="d-flex flex-column mb-7 fv-row">
															<!--begin::Label-->
															<label class="fs-6 fw-bold mb-2">Address Line 2</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input class="form-control form-control-solid" placeholder="" name="address2" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="d-flex flex-column mb-7 fv-row">
															<!--begin::Label-->
															<label class="fs-6 fw-bold mb-2">Town</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input class="form-control form-control-solid" placeholder="" name="city" value="Melbourne" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row g-9 mb-7">
															<!--begin::Col-->
															<div class="col-md-6 fv-row">
																<!--begin::Label-->
																<label class="fs-6 fw-bold mb-2">State / Province</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input class="form-control form-control-solid" placeholder="" name="state" value="Victoria" />
																<!--end::Input-->
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-md-6 fv-row">
																<!--begin::Label-->
																<label class="fs-6 fw-bold mb-2">Post Code</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input class="form-control form-control-solid" placeholder="" name="postcode" value="3000" />
																<!--end::Input-->
															</div>
															<!--end::Col-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="d-flex flex-column mb-7 fv-row">
															<!--begin::Label-->
															<label class="fs-6 fw-bold mb-2">
																<span>Country</span>
																<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<select name="country" aria-label="Select a Country" data-control="select2" data-placeholder="Select a Country..." class="form-select form-select-solid" data-dropdown-parent="#kt_modal_update_details">
																<option value="">Select a Country...</option>
																<option value="AF">Afghanistan</option>
																<option value="AX">Aland Islands</option>
																<option value="AL">Albania</option>
																<option value="DZ">Algeria</option>
																<option value="AS">American Samoa</option>
																<option value="AD">Andorra</option>
																<option value="AO">Angola</option>
																<option value="AI">Anguilla</option>
																<option value="AG">Antigua and Barbuda</option>
																<option value="AR">Argentina</option>
																<option value="AM">Armenia</option>
																<option value="AW">Aruba</option>
																<option value="AU">Australia</option>
																<option value="AT">Austria</option>
																<option value="AZ">Azerbaijan</option>
																<option value="BS">Bahamas</option>
																<option value="BH">Bahrain</option>
																<option value="BD">Bangladesh</option>
																<option value="BB">Barbados</option>
																<option value="BY">Belarus</option>
																<option value="BE">Belgium</option>
																<option value="BZ">Belize</option>
																<option value="BJ">Benin</option>
																<option value="BM">Bermuda</option>
																<option value="BT">Bhutan</option>
																<option value="BO">Bolivia, Plurinational State of</option>
																<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
																<option value="BA">Bosnia and Herzegovina</option>
																<option value="BW">Botswana</option>
																<option value="BR">Brazil</option>
																<option value="IO">British Indian Ocean Territory</option>
																<option value="BN">Brunei Darussalam</option>
																<option value="BG">Bulgaria</option>
																<option value="BF">Burkina Faso</option>
																<option value="BI">Burundi</option>
																<option value="KH">Cambodia</option>
																<option value="CM">Cameroon</option>
																<option value="CA">Canada</option>
																<option value="CV">Cape Verde</option>
																<option value="KY">Cayman Islands</option>
																<option value="CF">Central African Republic</option>
																<option value="TD">Chad</option>
																<option value="CL">Chile</option>
																<option value="CN">China</option>
																<option value="CX">Christmas Island</option>
																<option value="CC">Cocos (Keeling) Islands</option>
																<option value="CO">Colombia</option>
																<option value="KM">Comoros</option>
																<option value="CK">Cook Islands</option>
																<option value="CR">Costa Rica</option>
																<option value="CI">Côte d'Ivoire</option>
																<option value="HR">Croatia</option>
																<option value="CU">Cuba</option>
																<option value="CW">Curaçao</option>
																<option value="CZ">Czech Republic</option>
																<option value="DK">Denmark</option>
																<option value="DJ">Djibouti</option>
																<option value="DM">Dominica</option>
																<option value="DO">Dominican Republic</option>
																<option value="EC">Ecuador</option>
																<option value="EG">Egypt</option>
																<option value="SV">El Salvador</option>
																<option value="GQ">Equatorial Guinea</option>
																<option value="ER">Eritrea</option>
																<option value="EE">Estonia</option>
																<option value="ET">Ethiopia</option>
																<option value="FK">Falkland Islands (Malvinas)</option>
																<option value="FJ">Fiji</option>
																<option value="FI">Finland</option>
																<option value="FR">France</option>
																<option value="PF">French Polynesia</option>
																<option value="GA">Gabon</option>
																<option value="GM">Gambia</option>
																<option value="GE">Georgia</option>
																<option value="DE">Germany</option>
																<option value="GH">Ghana</option>
																<option value="GI">Gibraltar</option>
																<option value="GR">Greece</option>
																<option value="GL">Greenland</option>
																<option value="GD">Grenada</option>
																<option value="GU">Guam</option>
																<option value="GT">Guatemala</option>
																<option value="GG">Guernsey</option>
																<option value="GN">Guinea</option>
																<option value="GW">Guinea-Bissau</option>
																<option value="HT">Haiti</option>
																<option value="VA">Holy See (Vatican City State)</option>
																<option value="HN">Honduras</option>
																<option value="HK">Hong Kong</option>
																<option value="HU">Hungary</option>
																<option value="IS">Iceland</option>
																<option value="IN">India</option>
																<option value="ID">Indonesia</option>
																<option value="IR">Iran, Islamic Republic of</option>
																<option value="IQ">Iraq</option>
																<option value="IE">Ireland</option>
																<option value="IM">Isle of Man</option>
																<option value="IL">Israel</option>
																<option value="IT">Italy</option>
																<option value="JM">Jamaica</option>
																<option value="JP">Japan</option>
																<option value="JE">Jersey</option>
																<option value="JO">Jordan</option>
																<option value="KZ">Kazakhstan</option>
																<option value="KE">Kenya</option>
																<option value="KI">Kiribati</option>
																<option value="KP">Korea, Democratic People's Republic of</option>
																<option value="KW">Kuwait</option>
																<option value="KG">Kyrgyzstan</option>
																<option value="LA">Lao People's Democratic Republic</option>
																<option value="LV">Latvia</option>
																<option value="LB">Lebanon</option>
																<option value="LS">Lesotho</option>
																<option value="LR">Liberia</option>
																<option value="LY">Libya</option>
																<option value="LI">Liechtenstein</option>
																<option value="LT">Lithuania</option>
																<option value="LU">Luxembourg</option>
																<option value="MO">Macao</option>
																<option value="MG">Madagascar</option>
																<option value="MW">Malawi</option>
																<option value="MY">Malaysia</option>
																<option value="MV">Maldives</option>
																<option value="ML">Mali</option>
																<option value="MT">Malta</option>
																<option value="MH">Marshall Islands</option>
																<option value="MQ">Martinique</option>
																<option value="MR">Mauritania</option>
																<option value="MU">Mauritius</option>
																<option value="MX">Mexico</option>
																<option value="FM">Micronesia, Federated States of</option>
																<option value="MD">Moldova, Republic of</option>
																<option value="MC">Monaco</option>
																<option value="MN">Mongolia</option>
																<option value="ME">Montenegro</option>
																<option value="MS">Montserrat</option>
																<option value="MA">Morocco</option>
																<option value="MZ">Mozambique</option>
																<option value="MM">Myanmar</option>
																<option value="NA">Namibia</option>
																<option value="NR">Nauru</option>
																<option value="NP">Nepal</option>
																<option value="NL">Netherlands</option>
																<option value="NZ">New Zealand</option>
																<option value="NI">Nicaragua</option>
																<option value="NE">Niger</option>
																<option value="NG">Nigeria</option>
																<option value="NU">Niue</option>
																<option value="NF">Norfolk Island</option>
																<option value="MP">Northern Mariana Islands</option>
																<option value="NO">Norway</option>
																<option value="OM">Oman</option>
																<option value="PK">Pakistan</option>
																<option value="PW">Palau</option>
																<option value="PS">Palestinian Territory, Occupied</option>
																<option value="PA">Panama</option>
																<option value="PG">Papua New Guinea</option>
																<option value="PY">Paraguay</option>
																<option value="PE">Peru</option>
																<option value="PH">Philippines</option>
																<option value="PL">Poland</option>
																<option value="PT">Portugal</option>
																<option value="PR">Puerto Rico</option>
																<option value="QA">Qatar</option>
																<option value="RO">Romania</option>
																<option value="RU">Russian Federation</option>
																<option value="RW">Rwanda</option>
																<option value="BL">Saint Barthélemy</option>
																<option value="KN">Saint Kitts and Nevis</option>
																<option value="LC">Saint Lucia</option>
																<option value="MF">Saint Martin (French part)</option>
																<option value="VC">Saint Vincent and the Grenadines</option>
																<option value="WS">Samoa</option>
																<option value="SM">San Marino</option>
																<option value="ST">Sao Tome and Principe</option>
																<option value="SA">Saudi Arabia</option>
																<option value="SN">Senegal</option>
																<option value="RS">Serbia</option>
																<option value="SC">Seychelles</option>
																<option value="SL">Sierra Leone</option>
																<option value="SG">Singapore</option>
																<option value="SX">Sint Maarten (Dutch part)</option>
																<option value="SK">Slovakia</option>
																<option value="SI">Slovenia</option>
																<option value="SB">Solomon Islands</option>
																<option value="SO">Somalia</option>
																<option value="ZA">South Africa</option>
																<option value="KR">South Korea</option>
																<option value="SS">South Sudan</option>
																<option value="ES">Spain</option>
																<option value="LK">Sri Lanka</option>
																<option value="SD">Sudan</option>
																<option value="SR">Suriname</option>
																<option value="SZ">Swaziland</option>
																<option value="SE">Sweden</option>
																<option value="CH">Switzerland</option>
																<option value="SY">Syrian Arab Republic</option>
																<option value="TW">Taiwan, Province of China</option>
																<option value="TJ">Tajikistan</option>
																<option value="TZ">Tanzania, United Republic of</option>
																<option value="TH">Thailand</option>
																<option value="TG">Togo</option>
																<option value="TK">Tokelau</option>
																<option value="TO">Tonga</option>
																<option value="TT">Trinidad and Tobago</option>
																<option value="TN">Tunisia</option>
																<option value="TR">Turkey</option>
																<option value="TM">Turkmenistan</option>
																<option value="TC">Turks and Caicos Islands</option>
																<option value="TV">Tuvalu</option>
																<option value="UG">Uganda</option>
																<option value="UA">Ukraine</option>
																<option value="AE">United Arab Emirates</option>
																<option value="GB">United Kingdom</option>
																<option value="US">United States</option>
																<option value="UY">Uruguay</option>
																<option value="UZ">Uzbekistan</option>
																<option value="VU">Vanuatu</option>
																<option value="VE">Venezuela, Bolivarian Republic of</option>
																<option value="VN">Vietnam</option>
																<option value="VI">Virgin Islands</option>
																<option value="YE">Yemen</option>
																<option value="ZM">Zambia</option>
																<option value="ZW">Zimbabwe</option>
															</select>
															<!--end::Input-->
														</div>
														<!--end::Input group-->
													</div>
													<!--end::Address form-->
												</div>
												<!--end::Scroll-->
											</div>
											<!--end::Modal body-->
											<!--begin::Modal footer-->
											<div class="modal-footer flex-center">
												<!--begin::Button-->
												<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
												<!--end::Button-->
												<!--begin::Button-->
												<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
													<span class="indicator-label">Submit</span>
													<span class="indicator-progress">Please wait...
													<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
												</button>
												<!--end::Button-->
											</div>
											<!--end::Modal footer-->
										</form>
										<!--end::Form-->
									</div>
								</div>
							</div>
							<!--end::Modal - Update user details-->
							<!--begin::Modal - Add schedule-->
							<div class="modal fade" id="kt_modal_add_schedule" tabindex="-1" aria-hidden="true">
								<!--begin::Modal dialog-->
								<div class="modal-dialog modal-dialog-centered mw-650px">
									<!--begin::Modal content-->
									<div class="modal-content">
										<!--begin::Modal header-->
										<div class="modal-header">
											<!--begin::Modal title-->
											<h2 class="fw-bolder">Add an Event</h2>
											<!--end::Modal title-->
											<!--begin::Close-->
											<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
														<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Close-->
										</div>
										<!--end::Modal header-->
										<!--begin::Modal body-->
										<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
											<!--begin::Form-->
											<form id="kt_modal_add_schedule_form" class="form" action="#">
												<!--begin::Input group-->
												<div class="fv-row mb-7">
													<!--begin::Label-->
													<label class="required fs-6 fw-bold form-label mb-2">Event Name</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="text" class="form-control form-control-solid" name="event_name" value="" />
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-7">
													<!--begin::Label-->
													<label class="fs-6 fw-bold form-label mb-2">
														<span class="required">Date &amp; Time</span>
														<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Select a date &amp; time."></i>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input class="form-control form-control-solid" placeholder="Pick date &amp; time" name="event_datetime" id="kt_modal_add_schedule_datepicker" />
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-7">
													<!--begin::Label-->
													<label class="required fs-6 fw-bold form-label mb-2">Event Organiser</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="text" class="form-control form-control-solid" name="event_org" value="" />
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-7">
													<!--begin::Label-->
													<label class="required fs-6 fw-bold form-label mb-2">Send Event Details To</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input id="kt_modal_add_schedule_tagify" type="text" class="form-control form-control-solid" name="event_invitees" value="smith@kpmg.com, melody@altbox.com" />
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="text-center pt-15">
													<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
													<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
														<span class="indicator-label">Submit</span>
														<span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
												</div>
												<!--end::Actions-->
											</form>
											<!--end::Form-->
										</div>
										<!--end::Modal body-->
									</div>
									<!--end::Modal content-->
								</div>
								<!--end::Modal dialog-->
							</div>
							<!--end::Modal - Add schedule-->
							<!--begin::Modal - Add task-->
							<div class="modal fade" id="kt_modal_add_task" tabindex="-1" aria-hidden="true">
								<!--begin::Modal dialog-->
								<div class="modal-dialog modal-dialog-centered mw-650px">
									<!--begin::Modal content-->
									<div class="modal-content">
										<!--begin::Modal header-->
										<div class="modal-header">
											<!--begin::Modal title-->
											<h2 class="fw-bolder">Add a Task</h2>
											<!--end::Modal title-->
											<!--begin::Close-->
											<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
														<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Close-->
										</div>
										<!--end::Modal header-->
										<!--begin::Modal body-->
										<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
											<!--begin::Form-->
											<form id="kt_modal_add_task_form" class="form" action="#">
												<!--begin::Input group-->
												<div class="fv-row mb-7">
													<!--begin::Label-->
													<label class="required fs-6 fw-bold form-label mb-2">Task Name</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="text" class="form-control form-control-solid" name="task_name" value="" />
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-7">
													<!--begin::Label-->
													<label class="fs-6 fw-bold form-label mb-2">
														<span class="required">Task Due Date</span>
														<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Select a due date."></i>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input class="form-control form-control-solid" placeholder="Pick date" name="task_duedate" id="kt_modal_add_task_datepicker" />
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-7">
													<!--begin::Label-->
													<label class="fs-6 fw-bold form-label mb-2">Task Description</label>
													<!--end::Label-->
													<!--begin::Input-->
													<textarea class="form-control form-control-solid rounded-3"></textarea>
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="text-center pt-15">
													<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
													<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
														<span class="indicator-label">Submit</span>
														<span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
												</div>
												<!--end::Actions-->
											</form>
											<!--end::Form-->
										</div>
										<!--end::Modal body-->
									</div>
									<!--end::Modal content-->
								</div>
								<!--end::Modal dialog-->
							</div>
							<!--end::Modal - Add task-->
							<!--begin::Modal - Update email-->
							<div class="modal fade" id="kt_modal_update_email" tabindex="-1" aria-hidden="true">
								<!--begin::Modal dialog-->
								<div class="modal-dialog modal-dialog-centered mw-650px">
									<!--begin::Modal content-->
									<div class="modal-content">
										<!--begin::Modal header-->
										<div class="modal-header">
											<!--begin::Modal title-->
											<h2 class="fw-bolder">Update Email Address</h2>
											<!--end::Modal title-->
											<!--begin::Close-->
											<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
														<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Close-->
										</div>
										<!--end::Modal header-->
										<!--begin::Modal body-->
										<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
											<!--begin::Form-->
											<form id="kt_modal_update_email_form" class="form" action="#">
												<!--begin::Notice-->
												<!--begin::Notice-->
												<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
													<!--begin::Icon-->
													<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
													<span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor" />
															<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--end::Icon-->
													<!--begin::Wrapper-->
													<div class="d-flex flex-stack flex-grow-1">
														<!--begin::Content-->
														<div class="fw-bold">
															<div class="fs-6 text-gray-700">Please note that a valid email address is required to complete the email verification.</div>
														</div>
														<!--end::Content-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Notice-->
												<!--end::Notice-->
												<!--begin::Input group-->
												<div class="fv-row mb-7">
													<!--begin::Label-->
													<label class="fs-6 fw-bold form-label mb-2">
														<span class="required">Email Address</span>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input class="form-control form-control-solid" placeholder="" name="profile_email" value="smith@kpmg.com" />
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="text-center pt-15">
													<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
													<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
														<span class="indicator-label">Submit</span>
														<span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
												</div>
												<!--end::Actions-->
											</form>
											<!--end::Form-->
										</div>
										<!--end::Modal body-->
									</div>
									<!--end::Modal content-->
								</div>
								<!--end::Modal dialog-->
							</div>
							<!--end::Modal - Update email-->
							<!--begin::Modal - Update password-->
							<div class="modal fade" id="kt_modal_update_password" tabindex="-1" aria-hidden="true">
								<!--begin::Modal dialog-->
								<div class="modal-dialog modal-dialog-centered mw-650px">
									<!--begin::Modal content-->
									<div class="modal-content">
										<!--begin::Modal header-->
										<div class="modal-header">
											<!--begin::Modal title-->
											<h2 class="fw-bolder">Update Password</h2>
											<!--end::Modal title-->
											<!--begin::Close-->
											<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
														<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Close-->
										</div>
										<!--end::Modal header-->
										<!--begin::Modal body-->
										<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
											<!--begin::Form-->
											<form id="kt_modal_update_password_form" class="form" action="#">
												<!--begin::Input group=-->
												<div class="fv-row mb-10">
													<label class="required form-label fs-6 mb-2">Current Password</label>
													<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="current_password" autocomplete="off" />
												</div>
												<!--end::Input group=-->
												<!--begin::Input group-->
												<div class="mb-10 fv-row" data-kt-password-meter="true">
													<!--begin::Wrapper-->
													<div class="mb-1">
														<!--begin::Label-->
														<label class="form-label fw-bold fs-6 mb-2">New Password</label>
														<!--end::Label-->
														<!--begin::Input wrapper-->
														<div class="position-relative mb-3">
															<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="new_password" autocomplete="off" />
															<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
																<i class="bi bi-eye-slash fs-2"></i>
																<i class="bi bi-eye fs-2 d-none"></i>
															</span>
														</div>
														<!--end::Input wrapper-->
														<!--begin::Meter-->
														<div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
															<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
															<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
															<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
															<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
														</div>
														<!--end::Meter-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Hint-->
													<div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp; symbols.</div>
													<!--end::Hint-->
												</div>
												<!--end::Input group=-->
												<!--begin::Input group=-->
												<div class="fv-row mb-10">
													<label class="form-label fw-bold fs-6 mb-2">Confirm New Password</label>
													<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="confirm_password" autocomplete="off" />
												</div>
												<!--end::Input group=-->
												<!--begin::Actions-->
												<div class="text-center pt-15">
													<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
													<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
														<span class="indicator-label">Submit</span>
														<span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
												</div>
												<!--end::Actions-->
											</form>
											<!--end::Form-->
										</div>
										<!--end::Modal body-->
									</div>
									<!--end::Modal content-->
								</div>
								<!--end::Modal dialog-->
							</div>
							<!--end::Modal - Update password-->
							<!--begin::Modal - Update role-->
							<div class="modal fade" id="kt_modal_update_role" tabindex="-1" aria-hidden="true">
								<!--begin::Modal dialog-->
								<div class="modal-dialog modal-dialog-centered mw-650px">
									<!--begin::Modal content-->
									<div class="modal-content">
										<!--begin::Modal header-->
										<div class="modal-header">
											<!--begin::Modal title-->
											<h2 class="fw-bolder">Update User Role</h2>
											<!--end::Modal title-->
											<!--begin::Close-->
											<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
														<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Close-->
										</div>
										<!--end::Modal header-->
										<!--begin::Modal body-->
										<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
											<!--begin::Form-->
											<form id="kt_modal_update_role_form" class="form" action="#">
												<!--begin::Notice-->
												<!--begin::Notice-->
												<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
													<!--begin::Icon-->
													<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
													<span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
															<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor" />
															<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--end::Icon-->
													<!--begin::Wrapper-->
													<div class="d-flex flex-stack flex-grow-1">
														<!--begin::Content-->
														<div class="fw-bold">
															<div class="fs-6 text-gray-700">Please note that reducing a user role rank, that user will lose all priviledges that was assigned to the previous role.</div>
														</div>
														<!--end::Content-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Notice-->
												<!--end::Notice-->
												<!--begin::Input group-->
												<div class="fv-row mb-7">
													<!--begin::Label-->
													<label class="fs-6 fw-bold form-label mb-5">
														<span class="required">Select a user role</span>
													</label>
													<!--end::Label-->
													<!--begin::Input row-->
													<div class="d-flex">
														<!--begin::Radio-->
														<div class="form-check form-check-custom form-check-solid">
															<!--begin::Input-->
															<input class="form-check-input me-3" name="user_role" type="radio" value="0" id="kt_modal_update_role_option_0" checked='checked' />
															<!--end::Input-->
															<!--begin::Label-->
															<label class="form-check-label" for="kt_modal_update_role_option_0">
																<div class="fw-bolder text-gray-800">Administrator</div>
																<div class="text-gray-600">Best for business owners and company administrators</div>
															</label>
															<!--end::Label-->
														</div>
														<!--end::Radio-->
													</div>
													<!--end::Input row-->
													<div class='separator separator-dashed my-5'></div>
													<!--begin::Input row-->
													<div class="d-flex">
														<!--begin::Radio-->
														<div class="form-check form-check-custom form-check-solid">
															<!--begin::Input-->
															<input class="form-check-input me-3" name="user_role" type="radio" value="1" id="kt_modal_update_role_option_1" />
															<!--end::Input-->
															<!--begin::Label-->
															<label class="form-check-label" for="kt_modal_update_role_option_1">
																<div class="fw-bolder text-gray-800">Developer</div>
																<div class="text-gray-600">Best for developers or people primarily using the API</div>
															</label>
															<!--end::Label-->
														</div>
														<!--end::Radio-->
													</div>
													<!--end::Input row-->
													<div class='separator separator-dashed my-5'></div>
													<!--begin::Input row-->
													<div class="d-flex">
														<!--begin::Radio-->
														<div class="form-check form-check-custom form-check-solid">
															<!--begin::Input-->
															<input class="form-check-input me-3" name="user_role" type="radio" value="2" id="kt_modal_update_role_option_2" />
															<!--end::Input-->
															<!--begin::Label-->
															<label class="form-check-label" for="kt_modal_update_role_option_2">
																<div class="fw-bolder text-gray-800">Analyst</div>
																<div class="text-gray-600">Best for people who need full access to analytics data, but don't need to update business settings</div>
															</label>
															<!--end::Label-->
														</div>
														<!--end::Radio-->
													</div>
													<!--end::Input row-->
													<div class='separator separator-dashed my-5'></div>
													<!--begin::Input row-->
													<div class="d-flex">
														<!--begin::Radio-->
														<div class="form-check form-check-custom form-check-solid">
															<!--begin::Input-->
															<input class="form-check-input me-3" name="user_role" type="radio" value="3" id="kt_modal_update_role_option_3" />
															<!--end::Input-->
															<!--begin::Label-->
															<label class="form-check-label" for="kt_modal_update_role_option_3">
																<div class="fw-bolder text-gray-800">Support</div>
																<div class="text-gray-600">Best for employees who regularly refund payments and respond to disputes</div>
															</label>
															<!--end::Label-->
														</div>
														<!--end::Radio-->
													</div>
													<!--end::Input row-->
													<div class='separator separator-dashed my-5'></div>
													<!--begin::Input row-->
													<div class="d-flex">
														<!--begin::Radio-->
														<div class="form-check form-check-custom form-check-solid">
															<!--begin::Input-->
															<input class="form-check-input me-3" name="user_role" type="radio" value="4" id="kt_modal_update_role_option_4" />
															<!--end::Input-->
															<!--begin::Label-->
															<label class="form-check-label" for="kt_modal_update_role_option_4">
																<div class="fw-bolder text-gray-800">Trial</div>
																<div class="text-gray-600">Best for people who need to preview content data, but don't need to make any updates</div>
															</label>
															<!--end::Label-->
														</div>
														<!--end::Radio-->
													</div>
													<!--end::Input row-->
												</div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="text-center pt-15">
													<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
													<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
														<span class="indicator-label">Submit</span>
														<span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
												</div>
												<!--end::Actions-->
											</form>
											<!--end::Form-->
										</div>
										<!--end::Modal body-->
									</div>
									<!--end::Modal content-->
								</div>
								<!--end::Modal dialog-->
							</div>
							<!--end::Modal - Update role-->
							<!--begin::Modal - Add task-->
							<div class="modal fade" id="kt_modal_add_auth_app" tabindex="-1" aria-hidden="true">
								<!--begin::Modal dialog-->
								<div class="modal-dialog modal-dialog-centered mw-650px">
									<!--begin::Modal content-->
									<div class="modal-content">
										<!--begin::Modal header-->
										<div class="modal-header">
											<!--begin::Modal title-->
											<h2 class="fw-bolder">Add Authenticator App</h2>
											<!--end::Modal title-->
											<!--begin::Close-->
											<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
														<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Close-->
										</div>
										<!--end::Modal header-->
										<!--begin::Modal body-->
										<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
											<!--begin::Content-->
											<div class="fw-bolder d-flex flex-column justify-content-center mb-5">
												<!--begin::Label-->
												<div class="text-center mb-5" data-kt-add-auth-action="qr-code-label">Download the
												<a href="#">Authenticator app</a>, add a new account, then scan this barcode to set up your account.</div>
												<div class="text-center mb-5 d-none" data-kt-add-auth-action="text-code-label">Download the
												<a href="#">Authenticator app</a>, add a new account, then enter this code to set up your account.</div>
												<!--end::Label-->
												<!--begin::QR code-->
												<div class="d-flex flex-center" data-kt-add-auth-action="qr-code">
													<img src="assets/media/misc/qr.png" alt="Scan this QR code" />
												</div>
												<!--end::QR code-->
												<!--begin::Text code-->
												<div class="border rounded p-5 d-flex flex-center d-none" data-kt-add-auth-action="text-code">
													<div class="fs-1">gi2kdnb54is709j</div>
												</div>
												<!--end::Text code-->
											</div>
											<!--end::Content-->
											<!--begin::Action-->
											<div class="d-flex flex-center">
												<div class="btn btn-light-primary" data-kt-add-auth-action="text-code-button">Enter code manually</div>
												<div class="btn btn-light-primary d-none" data-kt-add-auth-action="qr-code-button">Scan barcode instead</div>
											</div>
											<!--end::Action-->
										</div>
										<!--end::Modal body-->
									</div>
									<!--end::Modal content-->
								</div>
								<!--end::Modal dialog-->
							</div>
							<!--end::Modal - Add task-->
							<!--begin::Modal - Add task-->
							<div class="modal fade" id="kt_modal_add_one_time_password" tabindex="-1" aria-hidden="true">
								<!--begin::Modal dialog-->
								<div class="modal-dialog modal-dialog-centered mw-650px">
									<!--begin::Modal content-->
									<div class="modal-content">
										<!--begin::Modal header-->
										<div class="modal-header">
											<!--begin::Modal title-->
											<h2 class="fw-bolder">Enable One Time Password</h2>
											<!--end::Modal title-->
											<!--begin::Close-->
											<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
														<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Close-->
										</div>
										<!--end::Modal header-->
										<!--begin::Modal body-->
										<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
											<!--begin::Form-->
											<form class="form" id="kt_modal_add_one_time_password_form">
												<!--begin::Label-->
												<div class="fw-bolder mb-9">Enter the new phone number to receive an SMS to when you log in.</div>
												<!--end::Label-->
												<!--begin::Input group-->
												<div class="fv-row mb-7">
													<!--begin::Label-->
													<label class="fs-6 fw-bold form-label mb-2">
														<span class="required">Mobile number</span>
														<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="A valid mobile number is required to receive the one-time password to validate your account login."></i>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="text" class="form-control form-control-solid" name="otp_mobile_number" placeholder="+6123 456 789" value="" />
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Separator-->
												<div class="separator saperator-dashed my-5"></div>
												<!--end::Separator-->
												<!--begin::Input group-->
												<div class="fv-row mb-7">
													<!--begin::Label-->
													<label class="fs-6 fw-bold form-label mb-2">
														<span class="required">Email</span>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="email" class="form-control form-control-solid" name="otp_email" value="smith@kpmg.com" readonly="readonly" />
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-7">
													<!--begin::Label-->
													<label class="fs-6 fw-bold form-label mb-2">
														<span class="required">Confirm password</span>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="password" class="form-control form-control-solid" name="otp_confirm_password" value="" />
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="text-center pt-15">
													<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Cancel</button>
													<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
														<span class="indicator-label">Submit</span>
														<span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
												</div>
												<!--end::Actions-->
											</form>
											<!--end::Form-->
										</div>
										<!--end::Modal body-->
									</div>
									<!--end::Modal content-->
								</div>
								<!--end::Modal dialog-->
							</div>
							<!--end::Modal - Add task-->
							<!--end::Modals-->
						</div>
						<!--end::Container-->
					</div>
				<!--end::Content-->
				<!--begin::Footer-->
				<?php require_once 'footer.php' ?>
				<!--end::Footer-->
			</div>
			<!--end::Wrapper-->
			<!--begin::Sidebar-->
			<?php require_once 'aside.php' ?>
			<!--end::Sidebar-->
		</div>
		<!--end::Page-->
	</div>
	<!--end::Root-->
	<!--begin::Drawers-->
	<!--begin::Activities drawer-->
	<div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities"
		data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
		data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end"
		data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">
		<div class="card shadow-none rounded-0">
			<!--begin::Header-->
			<div class="card-header" id="kt_activities_header">
				<h3 class="card-title fw-bolder text-dark">Activity Logs</h3>
				<div class="card-toolbar">
					<button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5"
						id="kt_activities_close">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-1">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
								fill="none">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
									transform="rotate(-45 6 17.3137)" fill="currentColor" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
									fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</button>
				</div>
			</div>
			<!--end::Header-->
			<!--begin::Body-->
			<div class="card-body position-relative" id="kt_activities_body">
				<!--begin::Content-->
				<div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true"
					data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body"
					data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer"
					data-kt-scroll-offset="5px">
					<!--begin::Timeline items-->
					<div class="timeline">
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line w-40px"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon symbol symbol-circle symbol-40px me-4">
								<div class="symbol-label bg-light">
									<!--begin::Svg Icon | path: icons/duotune/communication/com003.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-gray-500">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
											viewBox="0 0 24 24" fill="none">
											<path opacity="0.3"
												d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z"
												fill="currentColor" />
											<path
												d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z"
												fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n1">
								<!--begin::Timeline heading-->
								<div class="pe-3 mb-5">
									<!--begin::Title-->
									<div class="fs-5 fw-bold mb-2">There are 2 new tasks for you in “AirPlus Mobile App”
										project:</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
											data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
											<img src="assets/media/avatars/300-14.jpg" alt="img" />
										</div>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
								<!--begin::Timeline details-->
								<div class="overflow-auto pb-5">
									<!--begin::Record-->
									<div
										class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
										<!--begin::Title-->
										<a href="../../demo3/dist/apps/projects/project.html"
											class="fs-5 text-dark text-hover-primary fw-bold w-375px min-w-200px">Meeting
											with customer</a>
										<!--end::Title-->
										<!--begin::Label-->
										<div class="min-w-175px pe-2">
											<span class="badge badge-light text-muted">Application Design</span>
										</div>
										<!--end::Label-->
										<!--begin::Users-->
										<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px">
												<img src="assets/media/avatars/300-2.jpg" alt="img" />
											</div>
											<!--end::User-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px">
												<img src="assets/media/avatars/300-14.jpg" alt="img" />
											</div>
											<!--end::User-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px">
												<div class="symbol-label fs-8 fw-bold bg-primary text-inverse-primary">A
												</div>
											</div>
											<!--end::User-->
										</div>
										<!--end::Users-->
										<!--begin::Progress-->
										<div class="min-w-125px pe-2">
											<span class="badge badge-light-primary">In Progress</span>
										</div>
										<!--end::Progress-->
										<!--begin::Action-->
										<a href="../../demo3/dist/apps/projects/project.html"
											class="btn btn-sm btn-light btn-active-light-primary">View</a>
										<!--end::Action-->
									</div>
									<!--end::Record-->
									<!--begin::Record-->
									<div
										class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
										<!--begin::Title-->
										<a href="../../demo3/dist/apps/projects/project.html"
											class="fs-5 text-dark text-hover-primary fw-bold w-375px min-w-200px">Project
											Delivery Preparation</a>
										<!--end::Title-->
										<!--begin::Label-->
										<div class="min-w-175px">
											<span class="badge badge-light text-muted">CRM System Development</span>
										</div>
										<!--end::Label-->
										<!--begin::Users-->
										<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px">
												<img src="assets/media/avatars/300-20.jpg" alt="img" />
											</div>
											<!--end::User-->
											<!--begin::User-->
											<div class="symbol symbol-circle symbol-25px">
												<div class="symbol-label fs-8 fw-bold bg-success text-inverse-primary">B
												</div>
											</div>
											<!--end::User-->
										</div>
										<!--end::Users-->
										<!--begin::Progress-->
										<div class="min-w-125px">
											<span class="badge badge-light-success">Completed</span>
										</div>
										<!--end::Progress-->
										<!--begin::Action-->
										<a href="../../demo3/dist/apps/projects/project.html"
											class="btn btn-sm btn-light btn-active-light-primary">View</a>
										<!--end::Action-->
									</div>
									<!--end::Record-->
								</div>
								<!--end::Timeline details-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line w-40px"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon symbol symbol-circle symbol-40px">
								<div class="symbol-label bg-light">
									<!--begin::Svg Icon | path: icons/duotune/communication/com009.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-gray-500">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
											viewBox="0 0 24 24" fill="none">
											<path opacity="0.3"
												d="M5.78001 21.115L3.28001 21.949C3.10897 22.0059 2.92548 22.0141 2.75004 21.9727C2.57461 21.9312 2.41416 21.8418 2.28669 21.7144C2.15923 21.5869 2.06975 21.4264 2.0283 21.251C1.98685 21.0755 1.99507 20.892 2.05201 20.7209L2.886 18.2209L7.22801 13.879L10.128 16.774L5.78001 21.115Z"
												fill="currentColor" />
											<path
												d="M21.7 8.08899L15.911 2.30005C15.8161 2.2049 15.7033 2.12939 15.5792 2.07788C15.455 2.02637 15.3219 1.99988 15.1875 1.99988C15.0531 1.99988 14.92 2.02637 14.7958 2.07788C14.6717 2.12939 14.5589 2.2049 14.464 2.30005L13.74 3.02295C13.548 3.21498 13.4402 3.4754 13.4402 3.74695C13.4402 4.01849 13.548 4.27892 13.74 4.47095L14.464 5.19397L11.303 8.35498C10.1615 7.80702 8.87825 7.62639 7.62985 7.83789C6.38145 8.04939 5.2293 8.64265 4.332 9.53601C4.14026 9.72817 4.03256 9.98855 4.03256 10.26C4.03256 10.5315 4.14026 10.7918 4.332 10.984L13.016 19.667C13.208 19.859 13.4684 19.9668 13.74 19.9668C14.0115 19.9668 14.272 19.859 14.464 19.667C15.3575 18.77 15.9509 17.618 16.1624 16.3698C16.374 15.1215 16.1932 13.8383 15.645 12.697L18.806 9.53601L19.529 10.26C19.721 10.452 19.9814 10.5598 20.253 10.5598C20.5245 10.5598 20.785 10.452 20.977 10.26L21.7 9.53601C21.7952 9.44108 21.8706 9.32825 21.9221 9.2041C21.9737 9.07995 22.0002 8.94691 22.0002 8.8125C22.0002 8.67809 21.9737 8.54505 21.9221 8.4209C21.8706 8.29675 21.7952 8.18392 21.7 8.08899Z"
												fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n2">
								<!--begin::Timeline heading-->
								<div class="overflow-auto pe-3">
									<!--begin::Title-->
									<div class="fs-5 fw-bold mb-2">Invitation for crafting engaging designs that speak
										human workshop</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
											data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
											<img src="assets/media/avatars/300-1.jpg" alt="img" />
										</div>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line w-40px"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon symbol symbol-circle symbol-40px">
								<div class="symbol-label bg-light">
									<!--begin::Svg Icon | path: icons/duotune/coding/cod008.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-gray-500">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
											viewBox="0 0 24 24" fill="none">
											<path
												d="M11.2166 8.50002L10.5166 7.80007C10.1166 7.40007 10.1166 6.80005 10.5166 6.40005L13.4166 3.50002C15.5166 1.40002 18.9166 1.50005 20.8166 3.90005C22.5166 5.90005 22.2166 8.90007 20.3166 10.8001L17.5166 13.6C17.1166 14 16.5166 14 16.1166 13.6L15.4166 12.9C15.0166 12.5 15.0166 11.9 15.4166 11.5L18.3166 8.6C19.2166 7.7 19.1166 6.30002 18.0166 5.50002C17.2166 4.90002 16.0166 5.10007 15.3166 5.80007L12.4166 8.69997C12.2166 8.89997 11.6166 8.90002 11.2166 8.50002ZM11.2166 15.6L8.51659 18.3001C7.81659 19.0001 6.71658 19.2 5.81658 18.6C4.81658 17.9 4.71659 16.4 5.51659 15.5L8.31658 12.7C8.71658 12.3 8.71658 11.7001 8.31658 11.3001L7.6166 10.6C7.2166 10.2 6.6166 10.2 6.2166 10.6L3.6166 13.2C1.7166 15.1 1.4166 18.1 3.1166 20.1C5.0166 22.4 8.51659 22.5 10.5166 20.5L13.3166 17.7C13.7166 17.3 13.7166 16.7001 13.3166 16.3001L12.6166 15.6C12.3166 15.2 11.6166 15.2 11.2166 15.6Z"
												fill="currentColor" />
											<path opacity="0.3"
												d="M5.0166 9L2.81659 8.40002C2.31659 8.30002 2.0166 7.79995 2.1166 7.19995L2.31659 5.90002C2.41659 5.20002 3.21659 4.89995 3.81659 5.19995L6.0166 6.40002C6.4166 6.60002 6.6166 7.09998 6.5166 7.59998L6.31659 8.30005C6.11659 8.80005 5.5166 9.1 5.0166 9ZM8.41659 5.69995H8.6166C9.1166 5.69995 9.5166 5.30005 9.5166 4.80005L9.6166 3.09998C9.6166 2.49998 9.2166 2 8.5166 2H7.81659C7.21659 2 6.71659 2.59995 6.91659 3.19995L7.31659 4.90002C7.41659 5.40002 7.91659 5.69995 8.41659 5.69995ZM14.6166 18.2L15.1166 21.3C15.2166 21.8 15.7166 22.2 16.2166 22L17.6166 21.6C18.1166 21.4 18.4166 20.8 18.1166 20.3L16.7166 17.5C16.5166 17.1 16.1166 16.9 15.7166 17L15.2166 17.1C14.8166 17.3 14.5166 17.7 14.6166 18.2ZM18.4166 16.3L19.8166 17.2C20.2166 17.5 20.8166 17.3 21.0166 16.8L21.3166 15.9C21.5166 15.4 21.1166 14.8 20.5166 14.8H18.8166C18.0166 14.8 17.7166 15.9 18.4166 16.3Z"
												fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n1">
								<!--begin::Timeline heading-->
								<div class="mb-5 pe-3">
									<!--begin::Title-->
									<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">3 New
										Incoming Project Files:</a>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
											data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
											<img src="assets/media/avatars/300-23.jpg" alt="img" />
										</div>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
								<!--begin::Timeline details-->
								<div class="overflow-auto pb-5">
									<div
										class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
										<!--begin::Item-->
										<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
											<!--begin::Icon-->
											<img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg" />
											<!--end::Icon-->
											<!--begin::Info-->
											<div class="ms-1 fw-bold">
												<!--begin::Desc-->
												<a href="../../demo3/dist/apps/projects/project.html"
													class="fs-6 text-hover-primary fw-bolder">Finance KPI App
													Guidelines</a>
												<!--end::Desc-->
												<!--begin::Number-->
												<div class="text-gray-400">1.9mb</div>
												<!--end::Number-->
											</div>
											<!--begin::Info-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
											<!--begin::Icon-->
											<img alt="../../demo3/dist/apps/projects/project.html" class="w-30px me-3"
												src="assets/media/svg/files/doc.svg" />
											<!--end::Icon-->
											<!--begin::Info-->
											<div class="ms-1 fw-bold">
												<!--begin::Desc-->
												<a href="#" class="fs-6 text-hover-primary fw-bolder">Client UAT Testing
													Results</a>
												<!--end::Desc-->
												<!--begin::Number-->
												<div class="text-gray-400">18kb</div>
												<!--end::Number-->
											</div>
											<!--end::Info-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex flex-aligns-center">
											<!--begin::Icon-->
											<img alt="../../demo3/dist/apps/projects/project.html" class="w-30px me-3"
												src="assets/media/svg/files/css.svg" />
											<!--end::Icon-->
											<!--begin::Info-->
											<div class="ms-1 fw-bold">
												<!--begin::Desc-->
												<a href="#" class="fs-6 text-hover-primary fw-bolder">Finance
													Reports</a>
												<!--end::Desc-->
												<!--begin::Number-->
												<div class="text-gray-400">20mb</div>
												<!--end::Number-->
											</div>
											<!--end::Icon-->
										</div>
										<!--end::Item-->
									</div>
								</div>
								<!--end::Timeline details-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line w-40px"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon symbol symbol-circle symbol-40px">
								<div class="symbol-label bg-light">
									<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-gray-500">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
											viewBox="0 0 24 24" fill="none">
											<path opacity="0.3"
												d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
												fill="currentColor" />
											<path
												d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
												fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n1">
								<!--begin::Timeline heading-->
								<div class="pe-3 mb-5">
									<!--begin::Title-->
									<div class="fs-5 fw-bold mb-2">Task
										<a href="#" class="text-primary fw-bolder me-1">#45890</a>merged with
										<a href="#" class="text-primary fw-bolder me-1">#45890</a>in “Ads Pro Admin
										Dashboard project:
									</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
											data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
											<img src="assets/media/avatars/300-14.jpg" alt="img" />
										</div>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line w-40px"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon symbol symbol-circle symbol-40px">
								<div class="symbol-label bg-light">
									<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-gray-500">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
											viewBox="0 0 24 24" fill="none">
											<path opacity="0.3"
												d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
												fill="currentColor" />
											<path
												d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
												fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n1">
								<!--begin::Timeline heading-->
								<div class="pe-3 mb-5">
									<!--begin::Title-->
									<div class="fs-5 fw-bold mb-2">3 new application design concepts added:</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
											data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
											<img src="assets/media/avatars/300-2.jpg" alt="img" />
										</div>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
								<!--begin::Timeline details-->
								<div class="overflow-auto pb-5">
									<div
										class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
										<!--begin::Item-->
										<div class="overlay me-10">
											<!--begin::Image-->
											<div class="overlay-wrapper">
												<img alt="img" class="rounded w-150px"
													src="assets/media/stock/600x400/img-29.jpg" />
											</div>
											<!--end::Image-->
											<!--begin::Link-->
											<div class="overlay-layer bg-dark bg-opacity-10 rounded">
												<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
											</div>
											<!--end::Link-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="overlay me-10">
											<!--begin::Image-->
											<div class="overlay-wrapper">
												<img alt="img" class="rounded w-150px"
													src="assets/media/stock/600x400/img-31.jpg" />
											</div>
											<!--end::Image-->
											<!--begin::Link-->
											<div class="overlay-layer bg-dark bg-opacity-10 rounded">
												<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
											</div>
											<!--end::Link-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="overlay">
											<!--begin::Image-->
											<div class="overlay-wrapper">
												<img alt="img" class="rounded w-150px"
													src="assets/media/stock/600x400/img-40.jpg" />
											</div>
											<!--end::Image-->
											<!--begin::Link-->
											<div class="overlay-layer bg-dark bg-opacity-10 rounded">
												<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
											</div>
											<!--end::Link-->
										</div>
										<!--end::Item-->
									</div>
								</div>
								<!--end::Timeline details-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line w-40px"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon symbol symbol-circle symbol-40px">
								<div class="symbol-label bg-light">
									<!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-gray-500">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
											viewBox="0 0 24 24" fill="none">
											<path
												d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z"
												fill="currentColor" />
											<path opacity="0.3"
												d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z"
												fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n1">
								<!--begin::Timeline heading-->
								<div class="pe-3 mb-5">
									<!--begin::Title-->
									<div class="fs-5 fw-bold mb-2">New case
										<a href="#" class="text-primary fw-bolder me-1">#67890</a>is assigned to you in
										Multi-platform Database Design project
									</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="overflow-auto pb-5">
										<!--begin::Wrapper-->
										<div class="d-flex align-items-center mt-1 fs-6">
											<!--begin::Info-->
											<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
											<!--end::Info-->
											<!--begin::User-->
											<a href="#" class="text-primary fw-bolder me-1">Alice Tan</a>
											<!--end::User-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line w-40px"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon symbol symbol-circle symbol-40px">
								<div class="symbol-label bg-light">
									<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-gray-500">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
											viewBox="0 0 24 24" fill="none">
											<path opacity="0.3"
												d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
												fill="currentColor" />
											<path
												d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
												fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mb-10 mt-n1">
								<!--begin::Timeline heading-->
								<div class="pe-3 mb-5">
									<!--begin::Title-->
									<div class="fs-5 fw-bold mb-2">You have received a new order:</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
											data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
											<img src="assets/media/avatars/300-4.jpg" alt="img" />
										</div>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
								<!--begin::Timeline details-->
								<div class="overflow-auto pb-5">
									<!--begin::Notice-->
									<div
										class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
										<!--begin::Icon-->
										<!--begin::Svg Icon | path: icons/duotune/coding/cod004.svg-->
										<span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<path opacity="0.3"
													d="M19.0687 17.9688H11.0687C10.4687 17.9688 10.0687 18.3687 10.0687 18.9688V19.9688C10.0687 20.5687 10.4687 20.9688 11.0687 20.9688H19.0687C19.6687 20.9688 20.0687 20.5687 20.0687 19.9688V18.9688C20.0687 18.3687 19.6687 17.9688 19.0687 17.9688Z"
													fill="currentColor" />
												<path
													d="M4.06875 17.9688C3.86875 17.9688 3.66874 17.8688 3.46874 17.7688C2.96874 17.4688 2.86875 16.8688 3.16875 16.3688L6.76874 10.9688L3.16875 5.56876C2.86875 5.06876 2.96874 4.46873 3.46874 4.16873C3.96874 3.86873 4.56875 3.96878 4.86875 4.46878L8.86875 10.4688C9.06875 10.7688 9.06875 11.2688 8.86875 11.5688L4.86875 17.5688C4.66875 17.7688 4.36875 17.9688 4.06875 17.9688Z"
													fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--end::Icon-->
										<!--begin::Wrapper-->
										<div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
											<!--begin::Content-->
											<div class="mb-3 mb-md-0 fw-bold">
												<h4 class="text-gray-900 fw-bolder">Database Backup Process Completed!
												</h4>
												<div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make
													sure the data integrity is OK</div>
											</div>
											<!--end::Content-->
											<!--begin::Action-->
											<a href="#"
												class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>
											<!--end::Action-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Notice-->
								</div>
								<!--end::Timeline details-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
						<!--begin::Timeline item-->
						<div class="timeline-item">
							<!--begin::Timeline line-->
							<div class="timeline-line w-40px"></div>
							<!--end::Timeline line-->
							<!--begin::Timeline icon-->
							<div class="timeline-icon symbol symbol-circle symbol-40px">
								<div class="symbol-label bg-light">
									<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-gray-500">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
											viewBox="0 0 24 24" fill="none">
											<path
												d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z"
												fill="currentColor" />
											<path opacity="0.3"
												d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z"
												fill="currentColor" />
											<path opacity="0.3"
												d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z"
												fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Timeline icon-->
							<!--begin::Timeline content-->
							<div class="timeline-content mt-n1">
								<!--begin::Timeline heading-->
								<div class="pe-3 mb-5">
									<!--begin::Title-->
									<div class="fs-5 fw-bold mb-2">New order
										<a href="#" class="text-primary fw-bolder me-1">#67890</a>is placed for Workshow
										Planning &amp; Budget Estimation
									</div>
									<!--end::Title-->
									<!--begin::Description-->
									<div class="d-flex align-items-center mt-1 fs-6">
										<!--begin::Info-->
										<div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
										<!--end::Info-->
										<!--begin::User-->
										<a href="#" class="text-primary fw-bolder me-1">Jimmy Bold</a>
										<!--end::User-->
									</div>
									<!--end::Description-->
								</div>
								<!--end::Timeline heading-->
							</div>
							<!--end::Timeline content-->
						</div>
						<!--end::Timeline item-->
					</div>
					<!--end::Timeline items-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Body-->
			<!--begin::Footer-->
			<div class="card-footer py-5 text-center" id="kt_activities_footer">
				<a href="../../demo3/dist/pages/user-profile/activity.html" class="btn btn-bg-body text-primary">View
					All Activities
					<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
					<span class="svg-icon svg-icon-3 svg-icon-primary">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
								transform="rotate(-180 18 13)" fill="currentColor" />
							<path
								d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
								fill="currentColor" />
						</svg>
					</span>
					<!--end::Svg Icon-->
				</a>
			</div>
			<!--end::Footer-->
		</div>
	</div>
	<!--end::Activities drawer-->
	<!--begin::Chat drawer-->
	<div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat"
		data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
		data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end"
		data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
		<!--begin::Messenger-->
		<div class="card w-100 rounded-0 border-0" id="kt_drawer_chat_messenger">
			<!--begin::Card header-->
			<div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
				<!--begin::Title-->
				<div class="card-title">
					<!--begin::User-->
					<div class="d-flex justify-content-center flex-column me-3">
						<a href="#" class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>
						<!--begin::Info-->
						<div class="mb-0 lh-1">
							<span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
							<span class="fs-7 fw-bold text-muted">Active</span>
						</div>
						<!--end::Info-->
					</div>
					<!--end::User-->
				</div>
				<!--end::Title-->
				<!--begin::Card toolbar-->
				<div class="card-toolbar">
					<!--begin::Menu-->
					<div class="me-2">
						<button class="btn btn-sm btn-icon btn-active-light-primary" data-kt-menu-trigger="click"
							data-kt-menu-placement="bottom-end">
							<i class="bi bi-three-dots fs-3"></i>
						</button>
						<!--begin::Menu 3-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
							data-kt-menu="true">
							<!--begin::Heading-->
							<div class="menu-item px-3">
								<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Contacts</div>
							</div>
							<!--end::Heading-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-bs-toggle="modal"
									data-bs-target="#kt_modal_users_search">Add Contact</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal"
									data-bs-target="#kt_modal_invite_friends">Invite Contacts
									<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
										title="Specify a contact email to send an invitation"></i></a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3" data-kt-menu-trigger="hover"
								data-kt-menu-placement="right-start">
								<a href="#" class="menu-link px-3">
									<span class="menu-title">Groups</span>
									<span class="menu-arrow"></span>
								</a>
								<!--begin::Menu sub-->
								<div class="menu-sub menu-sub-dropdown w-175px py-4">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
											title="Coming soon">Create Group</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
											title="Coming soon">Invite Members</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
											title="Coming soon">Settings</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu sub-->
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3 my-1">
								<a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
									title="Coming soon">Settings</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu 3-->
					</div>
					<!--end::Menu-->
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_chat_close">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-2">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
								fill="none">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
									transform="rotate(-45 6 17.3137)" fill="currentColor" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
									fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</div>
					<!--end::Close-->
				</div>
				<!--end::Card toolbar-->
			</div>
			<!--end::Card header-->
			<!--begin::Card body-->
			<div class="card-body" id="kt_drawer_chat_messenger_body">
				<!--begin::Messages-->
				<div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true"
					data-kt-scroll-activate="true" data-kt-scroll-height="auto"
					data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer"
					data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
					<!--begin::Message(in)-->
					<div class="d-flex justify-content-start mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-start">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-3">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian
										Cox</a>
									<span class="text-muted fs-7 mb-1">2 mins</span>
								</div>
								<!--end::Details-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
								data-kt-element="message-text">How likely are you to recommend our company to your
								friends and family ?</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(in)-->
					<!--begin::Message(out)-->
					<div class="d-flex justify-content-end mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-end">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Details-->
								<div class="me-3">
									<span class="text-muted fs-7 mb-1">5 mins</span>
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
								</div>
								<!--end::Details-->
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
								data-kt-element="message-text">Hey there, we’re just writing to let you know that you’ve
								been subscribed to a repository on GitHub.</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(out)-->
					<!--begin::Message(in)-->
					<div class="d-flex justify-content-start mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-start">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-3">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian
										Cox</a>
									<span class="text-muted fs-7 mb-1">1 Hour</span>
								</div>
								<!--end::Details-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
								data-kt-element="message-text">Ok, Understood!</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(in)-->
					<!--begin::Message(out)-->
					<div class="d-flex justify-content-end mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-end">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Details-->
								<div class="me-3">
									<span class="text-muted fs-7 mb-1">2 Hours</span>
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
								</div>
								<!--end::Details-->
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
								data-kt-element="message-text">You’ll receive notifications for all issues, pull
								requests!</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(out)-->
					<!--begin::Message(in)-->
					<div class="d-flex justify-content-start mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-start">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-3">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian
										Cox</a>
									<span class="text-muted fs-7 mb-1">3 Hours</span>
								</div>
								<!--end::Details-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
								data-kt-element="message-text">You can unwatch this repository immediately by clicking
								here:
								<a href="https://keenthemes.com">Keenthemes.com</a>
							</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(in)-->
					<!--begin::Message(out)-->
					<div class="d-flex justify-content-end mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-end">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Details-->
								<div class="me-3">
									<span class="text-muted fs-7 mb-1">4 Hours</span>
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
								</div>
								<!--end::Details-->
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
								data-kt-element="message-text">Most purchased Business courses during this sale!</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(out)-->
					<!--begin::Message(in)-->
					<div class="d-flex justify-content-start mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-start">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-3">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian
										Cox</a>
									<span class="text-muted fs-7 mb-1">5 Hours</span>
								</div>
								<!--end::Details-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
								data-kt-element="message-text">Company BBQ to celebrate the last quater achievements and
								goals. Food and drinks provided</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(in)-->
					<!--begin::Message(template for out)-->
					<div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-end">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Details-->
								<div class="me-3">
									<span class="text-muted fs-7 mb-1">Just now</span>
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
								</div>
								<!--end::Details-->
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
								data-kt-element="message-text"></div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(template for out)-->
					<!--begin::Message(template for in)-->
					<div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-start">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-3">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian
										Cox</a>
									<span class="text-muted fs-7 mb-1">Just now</span>
								</div>
								<!--end::Details-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
								data-kt-element="message-text">Right before vacation season we have the next Big Deal
								for you.</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(template for in)-->
				</div>
				<!--end::Messages-->
			</div>
			<!--end::Card body-->
			<!--begin::Card footer-->
			<div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
				<!--begin::Input-->
				<textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input"
					placeholder="Type a message"></textarea>
				<!--end::Input-->
				<!--begin:Toolbar-->
				<div class="d-flex flex-stack">
					<!--begin::Actions-->
					<div class="d-flex align-items-center me-2">
						<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
							data-bs-toggle="tooltip" title="Coming soon">
							<i class="bi bi-paperclip fs-3"></i>
						</button>
						<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
							data-bs-toggle="tooltip" title="Coming soon">
							<i class="bi bi-upload fs-3"></i>
						</button>
					</div>
					<!--end::Actions-->
					<!--begin::Send-->
					<button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
					<!--end::Send-->
				</div>
				<!--end::Toolbar-->
			</div>
			<!--end::Card footer-->
		</div>
		<!--end::Messenger-->
	</div>
	<!--end::Chat drawer-->
	<!--end::Drawers-->
	<!--end::Main-->
	<!--begin::Engage drawers-->
	<!--begin::Demos drawer-->
	<div id="kt_engage_demos" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="explore"
		data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
		data-kt-drawer-width="{default:'350px', 'lg': '475px'}" data-kt-drawer-direction="end"
		data-kt-drawer-toggle="#kt_engage_demos_toggle" data-kt-drawer-close="#kt_engage_demos_close">
		<!--begin::Card-->
		<div class="card shadow-none rounded-0 w-100">
			<!--begin::Header-->
			<div class="card-header" id="kt_engage_demos_header">
				<h3 class="card-title fw-bolder text-gray-700">Explore</h3>
				<div class="card-toolbar">
					<button type="button" class="btn btn-sm btn-icon btn-active-color-primary h-40px w-40px me-n6"
						id="kt_engage_demos_close">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-2">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
								fill="none">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
									transform="rotate(-45 6 17.3137)" fill="currentColor" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
									fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</button>
				</div>
			</div>
			<!--end::Header-->

		</div>
		<!--end::Card-->
	</div>
	<!--end::Demos drawer-->
	<!--begin::Help drawer-->
	<div id="kt_help" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="help" data-kt-drawer-activate="true"
		data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'md': '525px'}"
		data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_help_toggle" data-kt-drawer-close="#kt_help_close">
		<!--begin::Card-->
		<div class="card shadow-none rounded-0 w-100">
			<!--begin::Header-->
			<div class="card-header" id="kt_help_header">
				<h5 class="card-title fw-bold text-gray-600">Learn &amp; Get Inspired</h5>
				<div class="card-toolbar">
					<button type="button" class="btn btn-sm btn-icon explore-btn-dismiss me-n5" id="kt_help_close">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-2">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
								fill="none">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
									transform="rotate(-45 6 17.3137)" fill="currentColor" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
									fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</button>
				</div>
			</div>
			<!--end::Header-->
			<!--begin::Body-->
			<div class="card-body" id="kt_help_body">
				<!--begin::Content-->
				<div id="kt_help_scroll" class="hover-scroll-overlay-y" data-kt-scroll="true"
					data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_help_body"
					data-kt-scroll-dependencies="#kt_help_header" data-kt-scroll-offset="5px">
					<!--begin::Support-->
					<div class="rounded border border-dashed border-gray-300 p-6 p-lg-8 mb-10">
						<!--begin::Heading-->
						<h2 class="fw-bolder mb-5">Support at
							<a href="https://devs.keenthemes.com" class="">devs.keenthemes.com</a>
						</h2>
						<!--end::Heading-->
						<!--begin::Description-->
						<div class="fs-5 fw-bold mb-5">
							<span class="text-gray-500">Join our developers community to find answer to your question
								and help others.</span>
							<a class="explore-link d-none" href="https://keenthemes.com/licensing">FAQs</a>
						</div>
						<!--end::Description-->
						<!--begin::Link-->
						<a href="https://devs.keenthemes.com" class="btn btn-lg explore-btn-primary w-100">Get
							Support</a>
						<!--end::Link-->
					</div>
					<!--end::Support-->
					<!--begin::Link-->
					<div class="d-flex align-items-center mb-7">
						<!--begin::Icon-->
						<div
							class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-warning">
							<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
							<span class="svg-icon svg-icon-warning svg-icon-2x svg-icon-lg-3x">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
									fill="none">
									<path opacity="0.3"
										d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
										fill="currentColor" />
									<path
										d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
										fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Icon-->
						<!--begin::Info-->
						<div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column me-2 me-lg-5">
								<!--begin::Title-->
								<a href="../../demo3/dist/documentation/getting-started.html"
									class="text-dark text-hover-primary fw-bolder fs-6 fs-lg-4 mb-1">Documentation &amp;
									Videos</a>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="text-muted fw-bold fs-7 fs-lg-6">From guides and video tutorials, to live
									demos and code examples to get started.</div>
								<!--end::Description-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
							<span class="svg-icon svg-icon-gray-400 svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
									fill="none">
									<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
										transform="rotate(-180 18 13)" fill="currentColor" />
									<path
										d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
										fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Info-->
					</div>
					<!--end::Link-->
					<!--begin::Link-->
					<div class="d-flex align-items-center mb-7">
						<!--begin::Icon-->
						<div
							class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-primary">
							<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
							<span class="svg-icon svg-icon-primary svg-icon-2x svg-icon-lg-3x">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
									fill="none">
									<path
										d="M21 9V11C21 11.6 20.6 12 20 12H14V8H20C20.6 8 21 8.4 21 9ZM10 8H4C3.4 8 3 8.4 3 9V11C3 11.6 3.4 12 4 12H10V8Z"
										fill="currentColor" />
									<path d="M15 2C13.3 2 12 3.3 12 5V8H15C16.7 8 18 6.7 18 5C18 3.3 16.7 2 15 2Z"
										fill="currentColor" />
									<path opacity="0.3"
										d="M9 2C10.7 2 12 3.3 12 5V8H9C7.3 8 6 6.7 6 5C6 3.3 7.3 2 9 2ZM4 12V21C4 21.6 4.4 22 5 22H10V12H4ZM20 12V21C20 21.6 19.6 22 19 22H14V12H20Z"
										fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Icon-->
						<!--begin::Info-->
						<div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column me-2 me-lg-5">
								<!--begin::Title-->
								<a href="../../demo3/dist/documentation/base/utilities.html"
									class="text-dark text-hover-primary fw-bolder fs-6 fs-lg-4 mb-1">Plugins &amp;
									Components</a>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="text-muted fw-bold fs-7 fs-lg-6">Check out our 300+ in-house components and
									customized 3rd-party plugins.</div>
								<!--end::Description-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
							<span class="svg-icon svg-icon-gray-400 svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
									fill="none">
									<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
										transform="rotate(-180 18 13)" fill="currentColor" />
									<path
										d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
										fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Info-->
					</div>
					<!--end::Link-->
					<!--begin::Link-->
					<div class="d-flex align-items-center mb-7">
						<!--begin::Icon-->
						<div
							class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-info">
							<!--begin::Svg Icon | path: icons/duotune/art/art006.svg-->
							<span class="svg-icon svg-icon-info svg-icon-2x svg-icon-lg-3x">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
									fill="none">
									<path opacity="0.3"
										d="M22 19V17C22 16.4 21.6 16 21 16H8V3C8 2.4 7.6 2 7 2H5C4.4 2 4 2.4 4 3V19C4 19.6 4.4 20 5 20H21C21.6 20 22 19.6 22 19Z"
										fill="currentColor" />
									<path
										d="M20 5V21C20 21.6 19.6 22 19 22H17C16.4 22 16 21.6 16 21V8H8V4H19C19.6 4 20 4.4 20 5ZM3 8H4V4H3C2.4 4 2 4.4 2 5V7C2 7.6 2.4 8 3 8Z"
										fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Icon-->
						<!--begin::Info-->
						<div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column me-2 me-lg-5">
								<!--begin::Title-->
								<a href="https://preview.keenthemes.com/metronic8/demo3/layout-builder.html"
									class="text-dark text-hover-primary fw-bolder fs-6 fs-lg-4 mb-1">Layout Builder</a>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="text-muted fw-bold fs-7 fs-lg-6">Build your layout, preview it and export
									the HTML for server side integration.</div>
								<!--end::Description-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
							<span class="svg-icon svg-icon-gray-400 svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
									fill="none">
									<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
										transform="rotate(-180 18 13)" fill="currentColor" />
									<path
										d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
										fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Info-->
					</div>
					<!--end::Link-->
					<!--begin::Link-->
					<div class="d-flex align-items-center mb-7">
						<!--begin::Icon-->
						<div
							class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-success">
							<!--begin::Svg Icon | path: icons/duotune/files/fil021.svg-->
							<span class="svg-icon svg-icon-success svg-icon-2x svg-icon-lg-3x">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
									fill="none">
									<path opacity="0.3"
										d="M19 15C20.7 15 22 13.7 22 12C22 10.3 20.7 9 19 9C18.9 9 18.9 9 18.8 9C18.9 8.7 19 8.3 19 8C19 6.3 17.7 5 16 5C15.4 5 14.8 5.2 14.3 5.5C13.4 4 11.8 3 10 3C7.2 3 5 5.2 5 8C5 8.3 5 8.7 5.1 9H5C3.3 9 2 10.3 2 12C2 13.7 3.3 15 5 15H19Z"
										fill="currentColor" />
									<path d="M13 17.4V12C13 11.4 12.6 11 12 11C11.4 11 11 11.4 11 12V17.4H13Z"
										fill="currentColor" />
									<path opacity="0.3" d="M8 17.4H16L12.7 20.7C12.3 21.1 11.7 21.1 11.3 20.7L8 17.4Z"
										fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Icon-->
						<!--begin::Info-->
						<div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column me-2 me-lg-5">
								<!--begin::Title-->
								<a href="https://devs.keenthemes.com/metronic"
									class="text-dark text-hover-primary fw-bolder fs-6 fs-lg-4 mb-1">Metronic
									Downloads</a>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="text-muted fw-bold fs-7 fs-lg-6">Download your prefered framework and demo
									with one click.</div>
								<!--end::Description-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
							<span class="svg-icon svg-icon-gray-400 svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
									fill="none">
									<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
										transform="rotate(-180 18 13)" fill="currentColor" />
									<path
										d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
										fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Info-->
					</div>
					<!--end::Link-->
					<!--begin::Link-->
					<div class="d-flex align-items-center mb-7">
						<!--begin::Icon-->
						<div
							class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-danger">
							<!--begin::Svg Icon | path: icons/duotune/electronics/elc009.svg-->
							<span class="svg-icon svg-icon-danger svg-icon-2x svg-icon-lg-3x">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
									fill="none">
									<path
										d="M13 9V8C13 7.4 13.4 7 14 7H15C16.7 7 18 5.7 18 4V3C18 2.4 17.6 2 17 2C16.4 2 16 2.4 16 3V4C16 4.6 15.6 5 15 5H14C12.3 5 11 6.3 11 8V9H13Z"
										fill="currentColor" />
									<path opacity="0.3"
										d="M21 22H3C2.4 22 2 21.6 2 21V10C2 9.4 2.4 9 3 9H21C21.6 9 22 9.4 22 10V21C22 21.6 21.6 22 21 22ZM5 12C4.4 12 4 12.4 4 13C4 13.6 4.4 14 5 14C5.6 14 6 13.6 6 13C6 12.4 5.6 12 5 12ZM8 12C7.4 12 7 12.4 7 13C7 13.6 7.4 14 8 14C8.6 14 9 13.6 9 13C9 12.4 8.6 12 8 12ZM11 12C10.4 12 10 12.4 10 13C10 13.6 10.4 14 11 14C11.6 14 12 13.6 12 13C12 12.4 11.6 12 11 12ZM14 12C13.4 12 13 12.4 13 13C13 13.6 13.4 14 14 14C14.6 14 15 13.6 15 13C15 12.4 14.6 12 14 12ZM9 15C8.4 15 8 15.4 8 16C8 16.6 8.4 17 9 17C9.6 17 10 16.6 10 16C10 15.4 9.6 15 9 15ZM12 15C11.4 15 11 15.4 11 16C11 16.6 11.4 17 12 17C12.6 17 13 16.6 13 16C13 15.4 12.6 15 12 15ZM15 15C14.4 15 14 15.4 14 16C14 16.6 14.4 17 15 17C15.6 17 16 16.6 16 16C16 15.4 15.6 15 15 15ZM19 18C18.4 18 18 18.4 18 19C18 19.6 18.4 20 19 20C19.6 20 20 19.6 20 19C20 18.4 19.6 18 19 18ZM7 19C7 18.4 6.6 18 6 18H5C4.4 18 4 18.4 4 19C4 19.6 4.4 20 5 20H6C6.6 20 7 19.6 7 19ZM7 16C7 15.4 6.6 15 6 15H5C4.4 15 4 15.4 4 16C4 16.6 4.4 17 5 17H6C6.6 17 7 16.6 7 16ZM17 14H19C19.6 14 20 13.6 20 13C20 12.4 19.6 12 19 12H17C16.4 12 16 12.4 16 13C16 13.6 16.4 14 17 14ZM18 17H19C19.6 17 20 16.6 20 16C20 15.4 19.6 15 19 15H18C17.4 15 17 15.4 17 16C17 16.6 17.4 17 18 17ZM17 19C17 18.4 16.6 18 16 18H9C8.4 18 8 18.4 8 19C8 19.6 8.4 20 9 20H16C16.6 20 17 19.6 17 19Z"
										fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Icon-->
						<!--begin::Info-->
						<div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
							<!--begin::Wrapper-->
							<div class="d-flex flex-column me-2 me-lg-5">
								<!--begin::Title-->
								<a href="../../demo3/dist/documentation/getting-started/changelog.html"
									class="text-dark text-hover-primary fw-bolder fs-6 fs-lg-4 mb-1">What's New</a>
								<!--end::Title-->
								<!--begin::Description-->
								<div class="text-muted fw-bold fs-7 fs-lg-6">Latest features and improvements added with
									our users feedback in mind.</div>
								<!--end::Description-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
							<span class="svg-icon svg-icon-gray-400 svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
									fill="none">
									<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
										transform="rotate(-180 18 13)" fill="currentColor" />
									<path
										d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
										fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Info-->
					</div>
					<!--end::Link-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Body-->
		</div>
		<!--end::Card-->
	</div>
	<!--end::Help drawer-->
	<!--end::Engage drawers-->

	<!--begin::Scrolltop-->
	<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
		<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
		<span class="svg-icon">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
				<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)"
					fill="currentColor" />
				<path
					d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
					fill="currentColor" />
			</svg>
		</span>
		<!--end::Svg Icon-->
	</div>
	<!--end::Scrolltop-->
	<!--begin::Modals-->
	<!--begin::Modal - Invite Friends-->
	<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog mw-650px">
			<!--begin::Modal content-->
			<div class="modal-content">
				<!--begin::Modal header-->
				<div class="modal-header pb-0 border-0 justify-content-end">
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-1">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
								fill="none">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
									transform="rotate(-45 6 17.3137)" fill="currentColor" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
									fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</div>
					<!--end::Close-->
				</div>
				<!--begin::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
					<!--begin::Heading-->
					<div class="text-center mb-13">
						<!--begin::Title-->
						<h1 class="mb-3">Invite a Friend</h1>
						<!--end::Title-->
						<!--begin::Description-->
						<div class="text-muted fw-bold fs-5">If you need more info, please check out
							<a href="#" class="link-primary fw-bolder">FAQ Page</a>.
						</div>
						<!--end::Description-->
					</div>
					<!--end::Heading-->
					<!--begin::Google Contacts Invite-->
					<div class="btn btn-light-primary fw-bolder w-100 mb-8">
						<img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Invite
						Gmail Contacts
					</div>
					<!--end::Google Contacts Invite-->
					<!--begin::Separator-->
					<div class="separator d-flex flex-center mb-8">
						<span class="text-uppercase bg-body fs-7 fw-bold text-muted px-3">or</span>
					</div>
					<!--end::Separator-->
					<!--begin::Textarea-->
					<textarea class="form-control form-control-solid mb-8" rows="3"
						placeholder="Type or paste emails here"></textarea>
					<!--end::Textarea-->
					<!--begin::Users-->
					<div class="mb-10">
						<!--begin::Heading-->
						<div class="fs-6 fw-bold mb-2">Your Invitations</div>
						<!--end::Heading-->
						<!--begin::List-->
						<div class="mh-300px scroll-y me-n7 pe-7">
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma
											Smith</a>
										<div class="fw-bold text-muted">smith@kpmg.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Melody
											Macy</a>
										<div class="fw-bold text-muted">melody@altbox.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1" selected="selected">Guest</option>
										<option value="2">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Max
											Smith</a>
										<div class="fw-bold text-muted">max@kt.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Sean
											Bean</a>
										<div class="fw-bold text-muted">sean@dellito.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Brian
											Cox</a>
										<div class="fw-bold text-muted">brian@exchange.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-warning text-warning fw-bold">C</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mikaela
											Collins</a>
										<div class="fw-bold text-muted">mik@pex.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Francis
											Mitcham</a>
										<div class="fw-bold text-muted">f.mit@kpmg.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Olivia
											Wild</a>
										<div class="fw-bold text-muted">olivia@corpmail.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-primary text-primary fw-bold">N</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Neil
											Owen</a>
										<div class="fw-bold text-muted">owen.neil@gmail.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1" selected="selected">Guest</option>
										<option value="2">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Dan
											Wilson</a>
										<div class="fw-bold text-muted">dam@consilting.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-danger text-danger fw-bold">E</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma
											Bold</a>
										<div class="fw-bold text-muted">emma@intenso.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ana
											Crown</a>
										<div class="fw-bold text-muted">ana.cf@limtel.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1" selected="selected">Guest</option>
										<option value="2">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-info text-info fw-bold">A</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Robert
											Doe</a>
										<div class="fw-bold text-muted">robert@benko.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">John
											Miller</a>
										<div class="fw-bold text-muted">miller@mapple.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-success text-success fw-bold">L</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Lucy
											Kunic</a>
										<div class="fw-bold text-muted">lucy.m@fentech.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ethan
											Wilder</a>
										<div class="fw-bold text-muted">ethan@loop.com.au</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1" selected="selected">Guest</option>
										<option value="2">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-info text-info fw-bold">A</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Robert
											Doe</a>
										<div class="fw-bold text-muted">robert@benko.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
						</div>
						<!--end::List-->
					</div>
					<!--end::Users-->
					<!--begin::Notice-->
					<div class="d-flex flex-stack">
						<!--begin::Label-->
						<div class="me-5 fw-bold">
							<label class="fs-6">Adding Users by Team Members</label>
							<div class="fs-7 text-muted">If you need more info, please check budget planning</div>
						</div>
						<!--end::Label-->
						<!--begin::Switch-->
						<label class="form-check form-switch form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" checked="checked" />
							<span class="form-check-label fw-bold text-muted">Allowed</span>
						</label>
						<!--end::Switch-->
					</div>
					<!--end::Notice-->
				</div>
				<!--end::Modal body-->
			</div>
			<!--end::Modal content-->
		</div>
		<!--end::Modal dialog-->
	</div>
	<!--end::Modal - Invite Friend-->
	<!--begin::Modal - Users Search-->
	<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog modal-dialog-centered mw-650px">
			<!--begin::Modal content-->
			<div class="modal-content">
				<!--begin::Modal header-->
				<div class="modal-header pb-0 border-0 justify-content-end">
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-1">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
								fill="none">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
									transform="rotate(-45 6 17.3137)" fill="currentColor" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
									fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</div>
					<!--end::Close-->
				</div>
				<!--begin::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
					<!--begin::Content-->
					<div class="text-center mb-13">
						<h1 class="mb-3">Search Users</h1>
						<div class="text-muted fw-bold fs-5">Invite Collaborators To Your Project</div>
					</div>
					<!--end::Content-->
					<!--begin::Search-->
					<div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2"
						data-kt-search-enter="enter" data-kt-search-layout="inline">
						<!--begin::Form-->
						<form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
							<!--begin::Hidden input(Added to disable form autocomplete)-->
							<input type="hidden" />
							<!--end::Hidden input-->
							<!--begin::Icon-->
							<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
							<span
								class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
									fill="none">
									<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
										transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
									<path
										d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
										fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
							<!--end::Icon-->
							<!--begin::Input-->
							<input type="text" class="form-control form-control-lg form-control-solid px-15"
								name="search" value="" placeholder="Search by username, full name or email..."
								data-kt-search-element="input" />
							<!--end::Input-->
							<!--begin::Spinner-->
							<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
								data-kt-search-element="spinner">
								<span class="spinner-border h-15px w-15px align-middle text-muted"></span>
							</span>
							<!--end::Spinner-->
							<!--begin::Reset-->
							<span
								class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none"
								data-kt-search-element="clear">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
								<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
										fill="none">
										<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
											transform="rotate(-45 6 17.3137)" fill="currentColor" />
										<rect x="7.41422" y="6" width="16" height="2" rx="1"
											transform="rotate(45 7.41422 6)" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</span>
							<!--end::Reset-->
						</form>
						<!--end::Form-->
						<!--begin::Wrapper-->
						<div class="py-5">
							<!--begin::Suggestions-->
							<div data-kt-search-element="suggestions">
								<!--begin::Heading-->
								<h3 class="fw-bold mb-5">Recently searched:</h3>
								<!--end::Heading-->
								<!--begin::Users-->
								<div class="mh-375px scroll-y me-n7 pe-7">
									<!--begin::User-->
									<a href="#"
										class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle me-5">
											<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Info-->
										<div class="fw-bold">
											<span class="fs-6 text-gray-800 me-2">Emma Smith</span>
											<span class="badge badge-light">Art Director</span>
										</div>
										<!--end::Info-->
									</a>
									<!--end::User-->
									<!--begin::User-->
									<a href="#"
										class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle me-5">
											<span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Info-->
										<div class="fw-bold">
											<span class="fs-6 text-gray-800 me-2">Melody Macy</span>
											<span class="badge badge-light">Marketing Analytic</span>
										</div>
										<!--end::Info-->
									</a>
									<!--end::User-->
									<!--begin::User-->
									<a href="#"
										class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle me-5">
											<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Info-->
										<div class="fw-bold">
											<span class="fs-6 text-gray-800 me-2">Max Smith</span>
											<span class="badge badge-light">Software Enginer</span>
										</div>
										<!--end::Info-->
									</a>
									<!--end::User-->
									<!--begin::User-->
									<a href="#"
										class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle me-5">
											<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Info-->
										<div class="fw-bold">
											<span class="fs-6 text-gray-800 me-2">Sean Bean</span>
											<span class="badge badge-light">Web Developer</span>
										</div>
										<!--end::Info-->
									</a>
									<!--end::User-->
									<!--begin::User-->
									<a href="#"
										class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle me-5">
											<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Info-->
										<div class="fw-bold">
											<span class="fs-6 text-gray-800 me-2">Brian Cox</span>
											<span class="badge badge-light">UI/UX Designer</span>
										</div>
										<!--end::Info-->
									</a>
									<!--end::User-->
								</div>
								<!--end::Users-->
							</div>
							<!--end::Suggestions-->
							<!--begin::Results(add d-none to below element to hide the users list by default)-->
							<div data-kt-search-element="results" class="d-none">
								<!--begin::Users-->
								<div class="mh-375px scroll-y me-n7 pe-7">
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='0']"
													value="0" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma
													Smith</a>
												<div class="fw-bold text-muted">smith@kpmg.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='1']"
													value="1" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Melody
													Macy</a>
												<div class="fw-bold text-muted">melody@altbox.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1" selected="selected">Guest</option>
												<option value="2">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='2']"
													value="2" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Max
													Smith</a>
												<div class="fw-bold text-muted">max@kt.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='3']"
													value="3" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Sean
													Bean</a>
												<div class="fw-bold text-muted">sean@dellito.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='4']"
													value="4" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Brian
													Cox</a>
												<div class="fw-bold text-muted">brian@exchange.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='5']"
													value="5" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span
													class="symbol-label bg-light-warning text-warning fw-bold">C</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mikaela
													Collins</a>
												<div class="fw-bold text-muted">mik@pex.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='6']"
													value="6" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Francis
													Mitcham</a>
												<div class="fw-bold text-muted">f.mit@kpmg.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='7']"
													value="7" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Olivia
													Wild</a>
												<div class="fw-bold text-muted">olivia@corpmail.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='8']"
													value="8" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span
													class="symbol-label bg-light-primary text-primary fw-bold">N</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Neil
													Owen</a>
												<div class="fw-bold text-muted">owen.neil@gmail.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1" selected="selected">Guest</option>
												<option value="2">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='9']"
													value="9" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Dan
													Wilson</a>
												<div class="fw-bold text-muted">dam@consilting.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='10']"
													value="10" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-danger text-danger fw-bold">E</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma
													Bold</a>
												<div class="fw-bold text-muted">emma@intenso.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='11']"
													value="11" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ana
													Crown</a>
												<div class="fw-bold text-muted">ana.cf@limtel.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1" selected="selected">Guest</option>
												<option value="2">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='12']"
													value="12" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-info text-info fw-bold">A</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Robert
													Doe</a>
												<div class="fw-bold text-muted">robert@benko.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='13']"
													value="13" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">John
													Miller</a>
												<div class="fw-bold text-muted">miller@mapple.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='14']"
													value="14" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span
													class="symbol-label bg-light-success text-success fw-bold">L</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Lucy
													Kunic</a>
												<div class="fw-bold text-muted">lucy.m@fentech.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='15']"
													value="15" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ethan
													Wilder</a>
												<div class="fw-bold text-muted">ethan@loop.com.au</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1" selected="selected">Guest</option>
												<option value="2">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='16']"
													value="16" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span
													class="symbol-label bg-light-warning text-warning fw-bold">C</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mikaela
													Collins</a>
												<div class="fw-bold text-muted">mik@pex.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
								</div>
								<!--end::Users-->
								<!--begin::Actions-->
								<div class="d-flex flex-center mt-15">
									<button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal"
										class="btn btn-active-light me-3">Cancel</button>
									<button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add
										Selected Users</button>
								</div>
								<!--end::Actions-->
							</div>
							<!--end::Results-->
							<!--begin::Empty-->
							<div data-kt-search-element="empty" class="text-center d-none">
								<!--begin::Message-->
								<div class="fw-bold py-10">
									<div class="text-gray-600 fs-3 mb-2">No users found</div>
									<div class="text-muted fs-6">Try to search by username, full name or email...</div>
								</div>
								<!--end::Message-->
								<!--begin::Illustration-->
								<div class="text-center px-5">
									<img src="assets/media/illustrations/dozzy-1/1.png" alt=""
										class="w-100 h-200px h-sm-325px" />
								</div>
								<!--end::Illustration-->
							</div>
							<!--end::Empty-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Search-->
				</div>
				<!--end::Modal body-->
			</div>
			<!--end::Modal content-->
		</div>
		<!--end::Modal dialog-->
	</div>
	<!--end::Modal - Users Search-->
	<!--end::Modals-->
	<!--begin::Javascript-->
	<script>var hostUrl = "assets/";</script>
	<!--begin::Global Javascript Bundle(used by all pages)-->
	<?php require_once 'js_scripts.php' ?>
	<!--end::Page Custom Javascript-->
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>