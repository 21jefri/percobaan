@extends('layouts.app')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">File Manager</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                        <li class="breadcrumb-item active">File Manager</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="d-xl-flex">
        <div class="w-100">
            <div class="d-md-flex">
                <div class="w-100">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <div class="row mb-3">
                                    <div class="col-xl-3 col-sm-6">
                                        <div class="mt-2">
                                            <h5>My Files</h5>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-sm-6">
                                        <form class="mt-4 mt-sm-0 float-sm-end d-flex align-items-center">
                                            <div class="search-box mb-2 me-2">
                                                <div class="position-relative">
                                                    <button class="btn text-white" style="background-color:#1B3061; ">Tambah
                                                        Folder</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="row">
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="card shadow-none border">
                                            <div class="card-body p-3">
                                                <div class="">
                                                    <div class="float-end ms-2">
                                                        <div class="dropdown mb-2">
                                                            <a class="font-size-16 text-muted" role="button"
                                                                data-bs-toggle="dropdown" aria-haspopup="true">
                                                                <i class="mdi mdi-dots-horizontal"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Open</a>
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                <a class="dropdown-item" href="#">Rename</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="avatar-xs me-3 mb-3">
                                                        <div class="avatar-title bg-transparent rounded"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="94"
                                                                height="57" viewBox="0 0 94 57" fill="none">
                                                                <g clip-path="url(#clip0_3654_3388)">
                                                                    <path
                                                                        d="M64.8108 3.03665C65.0628 2.34326 65.5174 1.74303 66.1148 1.31498C66.712 0.88693 67.4237 0.651132 68.1565 0.638621H91.028C91.4231 0.623732 91.8168 0.696409 92.1811 0.85153C92.5454 1.00665 92.8714 1.24043 93.1363 1.53638C93.4011 1.83232 93.5983 2.18322 93.714 2.56431C93.8294 2.94539 93.8605 3.34742 93.8051 3.74195L87.8965 53.6918C87.7711 54.5422 87.3497 55.3198 86.7074 55.8857C86.0651 56.4517 85.244 56.7689 84.3908 56.7807H11.8194C11.4255 56.796 11.0331 56.7237 10.6699 56.5697C10.3066 56.4154 9.9813 56.1831 9.71681 55.8886C9.45236 55.5941 9.25513 55.2449 9.13907 54.8652C9.02304 54.4858 8.99096 54.085 9.0451 53.6918L13.9994 11.7248C14.1248 10.8745 14.5463 10.0968 15.1886 9.53091C15.8308 8.965 16.652 8.64775 17.5051 8.63589H56.9965C58.7077 8.6065 60.3702 8.05587 61.7648 7.05647C63.1597 6.05707 64.2214 4.65568 64.8108 3.03665Z"
                                                                        fill="url(#paint0_linear_3654_3388)" />
                                                                    <path
                                                                        d="M64.8108 3.03665C65.0628 2.34326 65.5174 1.74303 66.1148 1.31498C66.712 0.88693 67.4237 0.651132 68.1565 0.638621H91.028C91.4231 0.623732 91.8168 0.696409 92.1811 0.85153C92.5454 1.00665 92.8714 1.24043 93.1363 1.53638C93.4011 1.83232 93.5983 2.18322 93.714 2.56431C93.8294 2.94539 93.8605 3.34742 93.8051 3.74195L87.8965 53.6918C87.7711 54.5422 87.3497 55.3198 86.7074 55.8857C86.0651 56.4517 85.244 56.7689 84.3908 56.7807H11.8194C11.4255 56.796 11.0331 56.7237 10.6699 56.5697C10.3066 56.4154 9.9813 56.1831 9.71681 55.8886C9.45236 55.5941 9.25513 55.2449 9.13907 54.8652C9.02304 54.4858 8.99096 54.085 9.0451 53.6918L13.9994 11.7248C14.1248 10.8745 14.5463 10.0968 15.1886 9.53091C15.8308 8.965 16.652 8.64775 17.5051 8.63589H56.9965C58.7077 8.6065 60.3702 8.05587 61.7648 7.05647C63.1597 6.05707 64.2214 4.65568 64.8108 3.03665Z"
                                                                        fill="white" fill-opacity="0.15" />
                                                                    <path
                                                                        d="M10.3516 54.4817H86.183L90.503 3.07227H14.6744L10.3516 54.4817Z"
                                                                        fill="#F0F0F0" />
                                                                    <path
                                                                        d="M10.3516 54.4817H86.183L89.3087 3.07227H14.6744L10.3516 54.4817Z"
                                                                        fill="#E0E0E0" />
                                                                    <path
                                                                        d="M10.3516 54.4811H86.183L88.7887 1.43945H12.9601L10.3516 54.4811Z"
                                                                        fill="#F0F0F0" />
                                                                    <path
                                                                        d="M10.3516 54.4811H86.183L87.2144 1.43945H12.9601L10.3516 54.4811Z"
                                                                        fill="#E0E0E0" />
                                                                    <path
                                                                        d="M10.3516 54.4811H86.183L86.6344 0H10.8058L10.3516 54.4811Z"
                                                                        fill="#F0F0F0" />
                                                                    <path
                                                                        d="M10.3509 54.4817H86.1823L84.6252 1.03125H9.28516L10.3509 54.4817Z"
                                                                        fill="#E0E0E0" />
                                                                    <path
                                                                        d="M10.3501 54.4811H86.1816L83.9301 1.43945H8.10156L10.3501 54.4811Z"
                                                                        fill="#F0F0F0" />
                                                                    <path
                                                                        d="M10.3524 54.4816H86.1838L82.5981 2.24023H6.76953L10.3524 54.4816Z"
                                                                        fill="#E0E0E0" />
                                                                    <path
                                                                        d="M10.3496 54.4807H86.181L82.0239 2.68555H6.19531L10.3496 54.4807Z"
                                                                        fill="#F0F0F0" />
                                                                    <path
                                                                        d="M48.3254 6.28055C48.3297 5.94652 48.4006 5.61679 48.534 5.31094C48.6671 5.00513 48.8603 4.72943 49.1014 4.50033C49.3428 4.27121 49.6274 4.09333 49.9383 3.97732C50.2491 3.8613 50.58 3.80945 50.9111 3.82494H73.7826C74.668 3.8592 75.5171 4.18876 76.1968 4.7619C76.8763 5.33504 77.3477 6.11931 77.5368 6.99161L86.574 53.628C86.9111 55.3754 85.7797 56.7946 84.0454 56.7946H11.474C9.73684 56.7946 8.04541 55.3754 7.71684 53.628L0.262555 15.1818C-0.0745884 13.4343 1.05684 12.0151 2.79113 12.0151H42.2854C45.714 12.0151 48.2083 9.63721 48.3254 6.28055Z"
                                                                        fill="url(#paint1_linear_3654_3388)" />
                                                                </g>
                                                                <defs>
                                                                    <linearGradient id="paint0_linear_3654_3388"
                                                                        x1="11.3432" y1="8.9709" x2="97.5406"
                                                                        y2="31.6767" gradientUnits="userSpaceOnUse">
                                                                        <stop stop-color="#51B6FF" />
                                                                        <stop offset="1" stop-color="#4F7CFF" />
                                                                    </linearGradient>
                                                                    <linearGradient id="paint1_linear_3654_3388"
                                                                        x1="2.57108" y1="11.6854" x2="89.4731"
                                                                        y2="36.4111" gradientUnits="userSpaceOnUse">
                                                                        <stop stop-color="#51B6FF" />
                                                                        <stop offset="1" stop-color="#4F7CFF" />
                                                                    </linearGradient>
                                                                    <clipPath id="clip0_3654_3388">
                                                                        <rect width="94" height="57"
                                                                            fill="white" />
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="overflow-hidden me-auto">
                                                            <h5 class="font-size-14 text-truncate mb-1"><a
                                                                    href="javascript: void(0);" class="text-body">Design</a>
                                                            </h5>
                                                            <p class="text-muted text-truncate mb-0">12 Files</p>
                                                        </div>
                                                        <div class="align-self-end ms-2">
                                                            <p class="text-muted mb-0">6GB</p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- end col -->

                                    <div class="col-xl-4 col-sm-6">
                                        <div class="card shadow-none border">
                                            <div class="card-body p-3">
                                                <div class="">
                                                    <div class="float-end ms-2">
                                                        <div class="dropdown mb-2">
                                                            <a class="font-size-16 text-muted" role="button"
                                                                data-bs-toggle="dropdown" aria-haspopup="true">
                                                                <i class="mdi mdi-dots-horizontal"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Open</a>
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                <a class="dropdown-item" href="#">Rename</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="avatar-xs me-3 mb-3">
                                                        <div class="avatar-title bg-transparent rounded"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="94"
                                                                height="57" viewBox="0 0 94 57" fill="none">
                                                                <g clip-path="url(#clip0_3654_3388)">
                                                                    <path
                                                                        d="M64.8108 3.03665C65.0628 2.34326 65.5174 1.74303 66.1148 1.31498C66.712 0.88693 67.4237 0.651132 68.1565 0.638621H91.028C91.4231 0.623732 91.8168 0.696409 92.1811 0.85153C92.5454 1.00665 92.8714 1.24043 93.1363 1.53638C93.4011 1.83232 93.5983 2.18322 93.714 2.56431C93.8294 2.94539 93.8605 3.34742 93.8051 3.74195L87.8965 53.6918C87.7711 54.5422 87.3497 55.3198 86.7074 55.8857C86.0651 56.4517 85.244 56.7689 84.3908 56.7807H11.8194C11.4255 56.796 11.0331 56.7237 10.6699 56.5697C10.3066 56.4154 9.9813 56.1831 9.71681 55.8886C9.45236 55.5941 9.25513 55.2449 9.13907 54.8652C9.02304 54.4858 8.99096 54.085 9.0451 53.6918L13.9994 11.7248C14.1248 10.8745 14.5463 10.0968 15.1886 9.53091C15.8308 8.965 16.652 8.64775 17.5051 8.63589H56.9965C58.7077 8.6065 60.3702 8.05587 61.7648 7.05647C63.1597 6.05707 64.2214 4.65568 64.8108 3.03665Z"
                                                                        fill="url(#paint0_linear_3654_3388)" />
                                                                    <path
                                                                        d="M64.8108 3.03665C65.0628 2.34326 65.5174 1.74303 66.1148 1.31498C66.712 0.88693 67.4237 0.651132 68.1565 0.638621H91.028C91.4231 0.623732 91.8168 0.696409 92.1811 0.85153C92.5454 1.00665 92.8714 1.24043 93.1363 1.53638C93.4011 1.83232 93.5983 2.18322 93.714 2.56431C93.8294 2.94539 93.8605 3.34742 93.8051 3.74195L87.8965 53.6918C87.7711 54.5422 87.3497 55.3198 86.7074 55.8857C86.0651 56.4517 85.244 56.7689 84.3908 56.7807H11.8194C11.4255 56.796 11.0331 56.7237 10.6699 56.5697C10.3066 56.4154 9.9813 56.1831 9.71681 55.8886C9.45236 55.5941 9.25513 55.2449 9.13907 54.8652C9.02304 54.4858 8.99096 54.085 9.0451 53.6918L13.9994 11.7248C14.1248 10.8745 14.5463 10.0968 15.1886 9.53091C15.8308 8.965 16.652 8.64775 17.5051 8.63589H56.9965C58.7077 8.6065 60.3702 8.05587 61.7648 7.05647C63.1597 6.05707 64.2214 4.65568 64.8108 3.03665Z"
                                                                        fill="white" fill-opacity="0.15" />
                                                                    <path
                                                                        d="M10.3516 54.4817H86.183L90.503 3.07227H14.6744L10.3516 54.4817Z"
                                                                        fill="#F0F0F0" />
                                                                    <path
                                                                        d="M10.3516 54.4817H86.183L89.3087 3.07227H14.6744L10.3516 54.4817Z"
                                                                        fill="#E0E0E0" />
                                                                    <path
                                                                        d="M10.3516 54.4811H86.183L88.7887 1.43945H12.9601L10.3516 54.4811Z"
                                                                        fill="#F0F0F0" />
                                                                    <path
                                                                        d="M10.3516 54.4811H86.183L87.2144 1.43945H12.9601L10.3516 54.4811Z"
                                                                        fill="#E0E0E0" />
                                                                    <path
                                                                        d="M10.3516 54.4811H86.183L86.6344 0H10.8058L10.3516 54.4811Z"
                                                                        fill="#F0F0F0" />
                                                                    <path
                                                                        d="M10.3509 54.4817H86.1823L84.6252 1.03125H9.28516L10.3509 54.4817Z"
                                                                        fill="#E0E0E0" />
                                                                    <path
                                                                        d="M10.3501 54.4811H86.1816L83.9301 1.43945H8.10156L10.3501 54.4811Z"
                                                                        fill="#F0F0F0" />
                                                                    <path
                                                                        d="M10.3524 54.4816H86.1838L82.5981 2.24023H6.76953L10.3524 54.4816Z"
                                                                        fill="#E0E0E0" />
                                                                    <path
                                                                        d="M10.3496 54.4807H86.181L82.0239 2.68555H6.19531L10.3496 54.4807Z"
                                                                        fill="#F0F0F0" />
                                                                    <path
                                                                        d="M48.3254 6.28055C48.3297 5.94652 48.4006 5.61679 48.534 5.31094C48.6671 5.00513 48.8603 4.72943 49.1014 4.50033C49.3428 4.27121 49.6274 4.09333 49.9383 3.97732C50.2491 3.8613 50.58 3.80945 50.9111 3.82494H73.7826C74.668 3.8592 75.5171 4.18876 76.1968 4.7619C76.8763 5.33504 77.3477 6.11931 77.5368 6.99161L86.574 53.628C86.9111 55.3754 85.7797 56.7946 84.0454 56.7946H11.474C9.73684 56.7946 8.04541 55.3754 7.71684 53.628L0.262555 15.1818C-0.0745884 13.4343 1.05684 12.0151 2.79113 12.0151H42.2854C45.714 12.0151 48.2083 9.63721 48.3254 6.28055Z"
                                                                        fill="url(#paint1_linear_3654_3388)" />
                                                                </g>
                                                                <defs>
                                                                    <linearGradient id="paint0_linear_3654_3388"
                                                                        x1="11.3432" y1="8.9709" x2="97.5406"
                                                                        y2="31.6767" gradientUnits="userSpaceOnUse">
                                                                        <stop stop-color="#51B6FF" />
                                                                        <stop offset="1" stop-color="#4F7CFF" />
                                                                    </linearGradient>
                                                                    <linearGradient id="paint1_linear_3654_3388"
                                                                        x1="2.57108" y1="11.6854" x2="89.4731"
                                                                        y2="36.4111" gradientUnits="userSpaceOnUse">
                                                                        <stop stop-color="#51B6FF" />
                                                                        <stop offset="1" stop-color="#4F7CFF" />
                                                                    </linearGradient>
                                                                    <clipPath id="clip0_3654_3388">
                                                                        <rect width="94" height="57"
                                                                            fill="white" />
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="overflow-hidden me-auto">
                                                            <h5 class="font-size-14 text-truncate mb-1"><a
                                                                    href="javascript: void(0);"
                                                                    class="text-body">Development</a></h5>
                                                            <p class="text-muted text-truncate mb-0">20 Files</p>
                                                        </div>
                                                        <div class="align-self-end ms-2">
                                                            <p class="text-muted mb-0">8GB</p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- end col -->

                                    <div class="col-xl-4 col-sm-6">
                                        <div class="card shadow-none border">
                                            <div class="card-body p-3">
                                                <div class="">
                                                    <div class="float-end ms-2">
                                                        <div class="dropdown mb-2">
                                                            <a class="font-size-16 text-muted" role="button"
                                                                data-bs-toggle="dropdown" aria-haspopup="true">
                                                                <i class="mdi mdi-dots-horizontal"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Open</a>
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                <a class="dropdown-item" href="#">Rename</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="avatar-xs me-3 mb-3">
                                                        <div class="avatar-title bg-transparent rounded"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="94"
                                                                height="57" viewBox="0 0 94 57" fill="none">
                                                                <g clip-path="url(#clip0_3654_3388)">
                                                                    <path
                                                                        d="M64.8108 3.03665C65.0628 2.34326 65.5174 1.74303 66.1148 1.31498C66.712 0.88693 67.4237 0.651132 68.1565 0.638621H91.028C91.4231 0.623732 91.8168 0.696409 92.1811 0.85153C92.5454 1.00665 92.8714 1.24043 93.1363 1.53638C93.4011 1.83232 93.5983 2.18322 93.714 2.56431C93.8294 2.94539 93.8605 3.34742 93.8051 3.74195L87.8965 53.6918C87.7711 54.5422 87.3497 55.3198 86.7074 55.8857C86.0651 56.4517 85.244 56.7689 84.3908 56.7807H11.8194C11.4255 56.796 11.0331 56.7237 10.6699 56.5697C10.3066 56.4154 9.9813 56.1831 9.71681 55.8886C9.45236 55.5941 9.25513 55.2449 9.13907 54.8652C9.02304 54.4858 8.99096 54.085 9.0451 53.6918L13.9994 11.7248C14.1248 10.8745 14.5463 10.0968 15.1886 9.53091C15.8308 8.965 16.652 8.64775 17.5051 8.63589H56.9965C58.7077 8.6065 60.3702 8.05587 61.7648 7.05647C63.1597 6.05707 64.2214 4.65568 64.8108 3.03665Z"
                                                                        fill="url(#paint0_linear_3654_3388)" />
                                                                    <path
                                                                        d="M64.8108 3.03665C65.0628 2.34326 65.5174 1.74303 66.1148 1.31498C66.712 0.88693 67.4237 0.651132 68.1565 0.638621H91.028C91.4231 0.623732 91.8168 0.696409 92.1811 0.85153C92.5454 1.00665 92.8714 1.24043 93.1363 1.53638C93.4011 1.83232 93.5983 2.18322 93.714 2.56431C93.8294 2.94539 93.8605 3.34742 93.8051 3.74195L87.8965 53.6918C87.7711 54.5422 87.3497 55.3198 86.7074 55.8857C86.0651 56.4517 85.244 56.7689 84.3908 56.7807H11.8194C11.4255 56.796 11.0331 56.7237 10.6699 56.5697C10.3066 56.4154 9.9813 56.1831 9.71681 55.8886C9.45236 55.5941 9.25513 55.2449 9.13907 54.8652C9.02304 54.4858 8.99096 54.085 9.0451 53.6918L13.9994 11.7248C14.1248 10.8745 14.5463 10.0968 15.1886 9.53091C15.8308 8.965 16.652 8.64775 17.5051 8.63589H56.9965C58.7077 8.6065 60.3702 8.05587 61.7648 7.05647C63.1597 6.05707 64.2214 4.65568 64.8108 3.03665Z"
                                                                        fill="white" fill-opacity="0.15" />
                                                                    <path
                                                                        d="M10.3516 54.4817H86.183L90.503 3.07227H14.6744L10.3516 54.4817Z"
                                                                        fill="#F0F0F0" />
                                                                    <path
                                                                        d="M10.3516 54.4817H86.183L89.3087 3.07227H14.6744L10.3516 54.4817Z"
                                                                        fill="#E0E0E0" />
                                                                    <path
                                                                        d="M10.3516 54.4811H86.183L88.7887 1.43945H12.9601L10.3516 54.4811Z"
                                                                        fill="#F0F0F0" />
                                                                    <path
                                                                        d="M10.3516 54.4811H86.183L87.2144 1.43945H12.9601L10.3516 54.4811Z"
                                                                        fill="#E0E0E0" />
                                                                    <path
                                                                        d="M10.3516 54.4811H86.183L86.6344 0H10.8058L10.3516 54.4811Z"
                                                                        fill="#F0F0F0" />
                                                                    <path
                                                                        d="M10.3509 54.4817H86.1823L84.6252 1.03125H9.28516L10.3509 54.4817Z"
                                                                        fill="#E0E0E0" />
                                                                    <path
                                                                        d="M10.3501 54.4811H86.1816L83.9301 1.43945H8.10156L10.3501 54.4811Z"
                                                                        fill="#F0F0F0" />
                                                                    <path
                                                                        d="M10.3524 54.4816H86.1838L82.5981 2.24023H6.76953L10.3524 54.4816Z"
                                                                        fill="#E0E0E0" />
                                                                    <path
                                                                        d="M10.3496 54.4807H86.181L82.0239 2.68555H6.19531L10.3496 54.4807Z"
                                                                        fill="#F0F0F0" />
                                                                    <path
                                                                        d="M48.3254 6.28055C48.3297 5.94652 48.4006 5.61679 48.534 5.31094C48.6671 5.00513 48.8603 4.72943 49.1014 4.50033C49.3428 4.27121 49.6274 4.09333 49.9383 3.97732C50.2491 3.8613 50.58 3.80945 50.9111 3.82494H73.7826C74.668 3.8592 75.5171 4.18876 76.1968 4.7619C76.8763 5.33504 77.3477 6.11931 77.5368 6.99161L86.574 53.628C86.9111 55.3754 85.7797 56.7946 84.0454 56.7946H11.474C9.73684 56.7946 8.04541 55.3754 7.71684 53.628L0.262555 15.1818C-0.0745884 13.4343 1.05684 12.0151 2.79113 12.0151H42.2854C45.714 12.0151 48.2083 9.63721 48.3254 6.28055Z"
                                                                        fill="url(#paint1_linear_3654_3388)" />
                                                                </g>
                                                                <defs>
                                                                    <linearGradient id="paint0_linear_3654_3388"
                                                                        x1="11.3432" y1="8.9709" x2="97.5406"
                                                                        y2="31.6767" gradientUnits="userSpaceOnUse">
                                                                        <stop stop-color="#51B6FF" />
                                                                        <stop offset="1" stop-color="#4F7CFF" />
                                                                    </linearGradient>
                                                                    <linearGradient id="paint1_linear_3654_3388"
                                                                        x1="2.57108" y1="11.6854" x2="89.4731"
                                                                        y2="36.4111" gradientUnits="userSpaceOnUse">
                                                                        <stop stop-color="#51B6FF" />
                                                                        <stop offset="1" stop-color="#4F7CFF" />
                                                                    </linearGradient>
                                                                    <clipPath id="clip0_3654_3388">
                                                                        <rect width="94" height="57"
                                                                            fill="white" />
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="overflow-hidden me-auto">
                                                            <h5 class="font-size-14 text-truncate mb-1"><a
                                                                    href="javascript: void(0);" class="text-body">Project
                                                                    A</a></h5>
                                                            <p class="text-muted text-truncate mb-0">06 Files</p>
                                                        </div>
                                                        <div class="align-self-end ms-2">
                                                            <p class="text-muted mb-0">2GB</p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- end col -->

                                    <div class="col-xl-4 col-sm-6">
                                        <div class="card shadow-none border">
                                            <div class="card-body p-3">
                                                <div class="">
                                                    <div class="float-end ms-2">
                                                        <div class="dropdown mb-2">
                                                            <a class="font-size-16 text-muted" role="button"
                                                                data-bs-toggle="dropdown" aria-haspopup="true">
                                                                <i class="mdi mdi-dots-horizontal"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Open</a>
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                <a class="dropdown-item" href="#">Rename</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="avatar-xs me-3 mb-3">
                                                        <div class="avatar-title bg-transparent rounded"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="94"
                                                                height="57" viewBox="0 0 94 57" fill="none">
                                                                <g clip-path="url(#clip0_3654_3388)">
                                                                    <path
                                                                        d="M64.8108 3.03665C65.0628 2.34326 65.5174 1.74303 66.1148 1.31498C66.712 0.88693 67.4237 0.651132 68.1565 0.638621H91.028C91.4231 0.623732 91.8168 0.696409 92.1811 0.85153C92.5454 1.00665 92.8714 1.24043 93.1363 1.53638C93.4011 1.83232 93.5983 2.18322 93.714 2.56431C93.8294 2.94539 93.8605 3.34742 93.8051 3.74195L87.8965 53.6918C87.7711 54.5422 87.3497 55.3198 86.7074 55.8857C86.0651 56.4517 85.244 56.7689 84.3908 56.7807H11.8194C11.4255 56.796 11.0331 56.7237 10.6699 56.5697C10.3066 56.4154 9.9813 56.1831 9.71681 55.8886C9.45236 55.5941 9.25513 55.2449 9.13907 54.8652C9.02304 54.4858 8.99096 54.085 9.0451 53.6918L13.9994 11.7248C14.1248 10.8745 14.5463 10.0968 15.1886 9.53091C15.8308 8.965 16.652 8.64775 17.5051 8.63589H56.9965C58.7077 8.6065 60.3702 8.05587 61.7648 7.05647C63.1597 6.05707 64.2214 4.65568 64.8108 3.03665Z"
                                                                        fill="url(#paint0_linear_3654_3388)" />
                                                                    <path
                                                                        d="M64.8108 3.03665C65.0628 2.34326 65.5174 1.74303 66.1148 1.31498C66.712 0.88693 67.4237 0.651132 68.1565 0.638621H91.028C91.4231 0.623732 91.8168 0.696409 92.1811 0.85153C92.5454 1.00665 92.8714 1.24043 93.1363 1.53638C93.4011 1.83232 93.5983 2.18322 93.714 2.56431C93.8294 2.94539 93.8605 3.34742 93.8051 3.74195L87.8965 53.6918C87.7711 54.5422 87.3497 55.3198 86.7074 55.8857C86.0651 56.4517 85.244 56.7689 84.3908 56.7807H11.8194C11.4255 56.796 11.0331 56.7237 10.6699 56.5697C10.3066 56.4154 9.9813 56.1831 9.71681 55.8886C9.45236 55.5941 9.25513 55.2449 9.13907 54.8652C9.02304 54.4858 8.99096 54.085 9.0451 53.6918L13.9994 11.7248C14.1248 10.8745 14.5463 10.0968 15.1886 9.53091C15.8308 8.965 16.652 8.64775 17.5051 8.63589H56.9965C58.7077 8.6065 60.3702 8.05587 61.7648 7.05647C63.1597 6.05707 64.2214 4.65568 64.8108 3.03665Z"
                                                                        fill="white" fill-opacity="0.15" />
                                                                    <path
                                                                        d="M10.3516 54.4817H86.183L90.503 3.07227H14.6744L10.3516 54.4817Z"
                                                                        fill="#F0F0F0" />
                                                                    <path
                                                                        d="M10.3516 54.4817H86.183L89.3087 3.07227H14.6744L10.3516 54.4817Z"
                                                                        fill="#E0E0E0" />
                                                                    <path
                                                                        d="M10.3516 54.4811H86.183L88.7887 1.43945H12.9601L10.3516 54.4811Z"
                                                                        fill="#F0F0F0" />
                                                                    <path
                                                                        d="M10.3516 54.4811H86.183L87.2144 1.43945H12.9601L10.3516 54.4811Z"
                                                                        fill="#E0E0E0" />
                                                                    <path
                                                                        d="M10.3516 54.4811H86.183L86.6344 0H10.8058L10.3516 54.4811Z"
                                                                        fill="#F0F0F0" />
                                                                    <path
                                                                        d="M10.3509 54.4817H86.1823L84.6252 1.03125H9.28516L10.3509 54.4817Z"
                                                                        fill="#E0E0E0" />
                                                                    <path
                                                                        d="M10.3501 54.4811H86.1816L83.9301 1.43945H8.10156L10.3501 54.4811Z"
                                                                        fill="#F0F0F0" />
                                                                    <path
                                                                        d="M10.3524 54.4816H86.1838L82.5981 2.24023H6.76953L10.3524 54.4816Z"
                                                                        fill="#E0E0E0" />
                                                                    <path
                                                                        d="M10.3496 54.4807H86.181L82.0239 2.68555H6.19531L10.3496 54.4807Z"
                                                                        fill="#F0F0F0" />
                                                                    <path
                                                                        d="M48.3254 6.28055C48.3297 5.94652 48.4006 5.61679 48.534 5.31094C48.6671 5.00513 48.8603 4.72943 49.1014 4.50033C49.3428 4.27121 49.6274 4.09333 49.9383 3.97732C50.2491 3.8613 50.58 3.80945 50.9111 3.82494H73.7826C74.668 3.8592 75.5171 4.18876 76.1968 4.7619C76.8763 5.33504 77.3477 6.11931 77.5368 6.99161L86.574 53.628C86.9111 55.3754 85.7797 56.7946 84.0454 56.7946H11.474C9.73684 56.7946 8.04541 55.3754 7.71684 53.628L0.262555 15.1818C-0.0745884 13.4343 1.05684 12.0151 2.79113 12.0151H42.2854C45.714 12.0151 48.2083 9.63721 48.3254 6.28055Z"
                                                                        fill="url(#paint1_linear_3654_3388)" />
                                                                </g>
                                                                <defs>
                                                                    <linearGradient id="paint0_linear_3654_3388"
                                                                        x1="11.3432" y1="8.9709" x2="97.5406"
                                                                        y2="31.6767" gradientUnits="userSpaceOnUse">
                                                                        <stop stop-color="#51B6FF" />
                                                                        <stop offset="1" stop-color="#4F7CFF" />
                                                                    </linearGradient>
                                                                    <linearGradient id="paint1_linear_3654_3388"
                                                                        x1="2.57108" y1="11.6854" x2="89.4731"
                                                                        y2="36.4111" gradientUnits="userSpaceOnUse">
                                                                        <stop stop-color="#51B6FF" />
                                                                        <stop offset="1" stop-color="#4F7CFF" />
                                                                    </linearGradient>
                                                                    <clipPath id="clip0_3654_3388">
                                                                        <rect width="94" height="57"
                                                                            fill="white" />
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="overflow-hidden me-auto">
                                                            <h5 class="font-size-14 text-truncate mb-1"><a
                                                                    href="javascript: void(0);"
                                                                    class="text-body">Admin</a></h5>
                                                            <p class="text-muted text-truncate mb-0">08 Files</p>
                                                        </div>
                                                        <div class="align-self-end ms-2">
                                                            <p class="text-muted mb-0">4GB</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- end col -->

                                    <div class="col-xl-4 col-sm-6">
                                        <div class="card shadow-none border">
                                            <div class="card-body p-3">
                                                <div class="">
                                                    <div class="float-end ms-2">
                                                        <div class="dropdown mb-2">
                                                            <a class="font-size-16 text-muted" role="button"
                                                                data-bs-toggle="dropdown" aria-haspopup="true">
                                                                <i class="mdi mdi-dots-horizontal"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Open</a>
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                <a class="dropdown-item" href="#">Rename</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="avatar-xs me-3 mb-3">
                                                        <div class="avatar-title bg-transparent rounded"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="94"
                                                                height="57" viewBox="0 0 94 57" fill="none">
                                                                <g clip-path="url(#clip0_3654_3388)">
                                                                    <path
                                                                        d="M64.8108 3.03665C65.0628 2.34326 65.5174 1.74303 66.1148 1.31498C66.712 0.88693 67.4237 0.651132 68.1565 0.638621H91.028C91.4231 0.623732 91.8168 0.696409 92.1811 0.85153C92.5454 1.00665 92.8714 1.24043 93.1363 1.53638C93.4011 1.83232 93.5983 2.18322 93.714 2.56431C93.8294 2.94539 93.8605 3.34742 93.8051 3.74195L87.8965 53.6918C87.7711 54.5422 87.3497 55.3198 86.7074 55.8857C86.0651 56.4517 85.244 56.7689 84.3908 56.7807H11.8194C11.4255 56.796 11.0331 56.7237 10.6699 56.5697C10.3066 56.4154 9.9813 56.1831 9.71681 55.8886C9.45236 55.5941 9.25513 55.2449 9.13907 54.8652C9.02304 54.4858 8.99096 54.085 9.0451 53.6918L13.9994 11.7248C14.1248 10.8745 14.5463 10.0968 15.1886 9.53091C15.8308 8.965 16.652 8.64775 17.5051 8.63589H56.9965C58.7077 8.6065 60.3702 8.05587 61.7648 7.05647C63.1597 6.05707 64.2214 4.65568 64.8108 3.03665Z"
                                                                        fill="url(#paint0_linear_3654_3388)" />
                                                                    <path
                                                                        d="M64.8108 3.03665C65.0628 2.34326 65.5174 1.74303 66.1148 1.31498C66.712 0.88693 67.4237 0.651132 68.1565 0.638621H91.028C91.4231 0.623732 91.8168 0.696409 92.1811 0.85153C92.5454 1.00665 92.8714 1.24043 93.1363 1.53638C93.4011 1.83232 93.5983 2.18322 93.714 2.56431C93.8294 2.94539 93.8605 3.34742 93.8051 3.74195L87.8965 53.6918C87.7711 54.5422 87.3497 55.3198 86.7074 55.8857C86.0651 56.4517 85.244 56.7689 84.3908 56.7807H11.8194C11.4255 56.796 11.0331 56.7237 10.6699 56.5697C10.3066 56.4154 9.9813 56.1831 9.71681 55.8886C9.45236 55.5941 9.25513 55.2449 9.13907 54.8652C9.02304 54.4858 8.99096 54.085 9.0451 53.6918L13.9994 11.7248C14.1248 10.8745 14.5463 10.0968 15.1886 9.53091C15.8308 8.965 16.652 8.64775 17.5051 8.63589H56.9965C58.7077 8.6065 60.3702 8.05587 61.7648 7.05647C63.1597 6.05707 64.2214 4.65568 64.8108 3.03665Z"
                                                                        fill="white" fill-opacity="0.15" />
                                                                    <path
                                                                        d="M10.3516 54.4817H86.183L90.503 3.07227H14.6744L10.3516 54.4817Z"
                                                                        fill="#F0F0F0" />
                                                                    <path
                                                                        d="M10.3516 54.4817H86.183L89.3087 3.07227H14.6744L10.3516 54.4817Z"
                                                                        fill="#E0E0E0" />
                                                                    <path
                                                                        d="M10.3516 54.4811H86.183L88.7887 1.43945H12.9601L10.3516 54.4811Z"
                                                                        fill="#F0F0F0" />
                                                                    <path
                                                                        d="M10.3516 54.4811H86.183L87.2144 1.43945H12.9601L10.3516 54.4811Z"
                                                                        fill="#E0E0E0" />
                                                                    <path
                                                                        d="M10.3516 54.4811H86.183L86.6344 0H10.8058L10.3516 54.4811Z"
                                                                        fill="#F0F0F0" />
                                                                    <path
                                                                        d="M10.3509 54.4817H86.1823L84.6252 1.03125H9.28516L10.3509 54.4817Z"
                                                                        fill="#E0E0E0" />
                                                                    <path
                                                                        d="M10.3501 54.4811H86.1816L83.9301 1.43945H8.10156L10.3501 54.4811Z"
                                                                        fill="#F0F0F0" />
                                                                    <path
                                                                        d="M10.3524 54.4816H86.1838L82.5981 2.24023H6.76953L10.3524 54.4816Z"
                                                                        fill="#E0E0E0" />
                                                                    <path
                                                                        d="M10.3496 54.4807H86.181L82.0239 2.68555H6.19531L10.3496 54.4807Z"
                                                                        fill="#F0F0F0" />
                                                                    <path
                                                                        d="M48.3254 6.28055C48.3297 5.94652 48.4006 5.61679 48.534 5.31094C48.6671 5.00513 48.8603 4.72943 49.1014 4.50033C49.3428 4.27121 49.6274 4.09333 49.9383 3.97732C50.2491 3.8613 50.58 3.80945 50.9111 3.82494H73.7826C74.668 3.8592 75.5171 4.18876 76.1968 4.7619C76.8763 5.33504 77.3477 6.11931 77.5368 6.99161L86.574 53.628C86.9111 55.3754 85.7797 56.7946 84.0454 56.7946H11.474C9.73684 56.7946 8.04541 55.3754 7.71684 53.628L0.262555 15.1818C-0.0745884 13.4343 1.05684 12.0151 2.79113 12.0151H42.2854C45.714 12.0151 48.2083 9.63721 48.3254 6.28055Z"
                                                                        fill="url(#paint1_linear_3654_3388)" />
                                                                </g>
                                                                <defs>
                                                                    <linearGradient id="paint0_linear_3654_3388"
                                                                        x1="11.3432" y1="8.9709" x2="97.5406"
                                                                        y2="31.6767" gradientUnits="userSpaceOnUse">
                                                                        <stop stop-color="#51B6FF" />
                                                                        <stop offset="1" stop-color="#4F7CFF" />
                                                                    </linearGradient>
                                                                    <linearGradient id="paint1_linear_3654_3388"
                                                                        x1="2.57108" y1="11.6854" x2="89.4731"
                                                                        y2="36.4111" gradientUnits="userSpaceOnUse">
                                                                        <stop stop-color="#51B6FF" />
                                                                        <stop offset="1" stop-color="#4F7CFF" />
                                                                    </linearGradient>
                                                                    <clipPath id="clip0_3654_3388">
                                                                        <rect width="94" height="57"
                                                                            fill="white" />
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="overflow-hidden me-auto">
                                                            <h5 class="font-size-14 text-truncate mb-1"><a
                                                                    href="javascript: void(0);" class="text-body">Sketch
                                                                    Design</a></h5>
                                                            <p class="text-muted text-truncate mb-0">12 Files</p>
                                                        </div>
                                                        <div class="align-self-end ms-2">
                                                            <p class="text-muted mb-0">6GB</p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- end col -->

                                    <div class="col-xl-4 col-sm-6">
                                        <div class="card shadow-none border">
                                            <div class="card-body p-3">
                                                <div class="">
                                                    <div class="float-end ms-2">
                                                        <div class="dropdown mb-2">
                                                            <a class="font-size-16 text-muted" role="button"
                                                                data-bs-toggle="dropdown" aria-haspopup="true">
                                                                <i class="mdi mdi-dots-horizontal"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="#">Open</a>
                                                                <a class="dropdown-item" href="#">Edit</a>
                                                                <a class="dropdown-item" href="#">Rename</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#">Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="avatar-xs me-3 mb-3">
                                                        <div class="avatar-title bg-transparent rounded"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="94"
                                                                height="57" viewBox="0 0 94 57" fill="none">
                                                                <g clip-path="url(#clip0_3654_3388)">
                                                                    <path
                                                                        d="M64.8108 3.03665C65.0628 2.34326 65.5174 1.74303 66.1148 1.31498C66.712 0.88693 67.4237 0.651132 68.1565 0.638621H91.028C91.4231 0.623732 91.8168 0.696409 92.1811 0.85153C92.5454 1.00665 92.8714 1.24043 93.1363 1.53638C93.4011 1.83232 93.5983 2.18322 93.714 2.56431C93.8294 2.94539 93.8605 3.34742 93.8051 3.74195L87.8965 53.6918C87.7711 54.5422 87.3497 55.3198 86.7074 55.8857C86.0651 56.4517 85.244 56.7689 84.3908 56.7807H11.8194C11.4255 56.796 11.0331 56.7237 10.6699 56.5697C10.3066 56.4154 9.9813 56.1831 9.71681 55.8886C9.45236 55.5941 9.25513 55.2449 9.13907 54.8652C9.02304 54.4858 8.99096 54.085 9.0451 53.6918L13.9994 11.7248C14.1248 10.8745 14.5463 10.0968 15.1886 9.53091C15.8308 8.965 16.652 8.64775 17.5051 8.63589H56.9965C58.7077 8.6065 60.3702 8.05587 61.7648 7.05647C63.1597 6.05707 64.2214 4.65568 64.8108 3.03665Z"
                                                                        fill="url(#paint0_linear_3654_3388)" />
                                                                    <path
                                                                        d="M64.8108 3.03665C65.0628 2.34326 65.5174 1.74303 66.1148 1.31498C66.712 0.88693 67.4237 0.651132 68.1565 0.638621H91.028C91.4231 0.623732 91.8168 0.696409 92.1811 0.85153C92.5454 1.00665 92.8714 1.24043 93.1363 1.53638C93.4011 1.83232 93.5983 2.18322 93.714 2.56431C93.8294 2.94539 93.8605 3.34742 93.8051 3.74195L87.8965 53.6918C87.7711 54.5422 87.3497 55.3198 86.7074 55.8857C86.0651 56.4517 85.244 56.7689 84.3908 56.7807H11.8194C11.4255 56.796 11.0331 56.7237 10.6699 56.5697C10.3066 56.4154 9.9813 56.1831 9.71681 55.8886C9.45236 55.5941 9.25513 55.2449 9.13907 54.8652C9.02304 54.4858 8.99096 54.085 9.0451 53.6918L13.9994 11.7248C14.1248 10.8745 14.5463 10.0968 15.1886 9.53091C15.8308 8.965 16.652 8.64775 17.5051 8.63589H56.9965C58.7077 8.6065 60.3702 8.05587 61.7648 7.05647C63.1597 6.05707 64.2214 4.65568 64.8108 3.03665Z"
                                                                        fill="white" fill-opacity="0.15" />
                                                                    <path
                                                                        d="M10.3516 54.4817H86.183L90.503 3.07227H14.6744L10.3516 54.4817Z"
                                                                        fill="#F0F0F0" />
                                                                    <path
                                                                        d="M10.3516 54.4817H86.183L89.3087 3.07227H14.6744L10.3516 54.4817Z"
                                                                        fill="#E0E0E0" />
                                                                    <path
                                                                        d="M10.3516 54.4811H86.183L88.7887 1.43945H12.9601L10.3516 54.4811Z"
                                                                        fill="#F0F0F0" />
                                                                    <path
                                                                        d="M10.3516 54.4811H86.183L87.2144 1.43945H12.9601L10.3516 54.4811Z"
                                                                        fill="#E0E0E0" />
                                                                    <path
                                                                        d="M10.3516 54.4811H86.183L86.6344 0H10.8058L10.3516 54.4811Z"
                                                                        fill="#F0F0F0" />
                                                                    <path
                                                                        d="M10.3509 54.4817H86.1823L84.6252 1.03125H9.28516L10.3509 54.4817Z"
                                                                        fill="#E0E0E0" />
                                                                    <path
                                                                        d="M10.3501 54.4811H86.1816L83.9301 1.43945H8.10156L10.3501 54.4811Z"
                                                                        fill="#F0F0F0" />
                                                                    <path
                                                                        d="M10.3524 54.4816H86.1838L82.5981 2.24023H6.76953L10.3524 54.4816Z"
                                                                        fill="#E0E0E0" />
                                                                    <path
                                                                        d="M10.3496 54.4807H86.181L82.0239 2.68555H6.19531L10.3496 54.4807Z"
                                                                        fill="#F0F0F0" />
                                                                    <path
                                                                        d="M48.3254 6.28055C48.3297 5.94652 48.4006 5.61679 48.534 5.31094C48.6671 5.00513 48.8603 4.72943 49.1014 4.50033C49.3428 4.27121 49.6274 4.09333 49.9383 3.97732C50.2491 3.8613 50.58 3.80945 50.9111 3.82494H73.7826C74.668 3.8592 75.5171 4.18876 76.1968 4.7619C76.8763 5.33504 77.3477 6.11931 77.5368 6.99161L86.574 53.628C86.9111 55.3754 85.7797 56.7946 84.0454 56.7946H11.474C9.73684 56.7946 8.04541 55.3754 7.71684 53.628L0.262555 15.1818C-0.0745884 13.4343 1.05684 12.0151 2.79113 12.0151H42.2854C45.714 12.0151 48.2083 9.63721 48.3254 6.28055Z"
                                                                        fill="url(#paint1_linear_3654_3388)" />
                                                                </g>
                                                                <defs>
                                                                    <linearGradient id="paint0_linear_3654_3388"
                                                                        x1="11.3432" y1="8.9709" x2="97.5406"
                                                                        y2="31.6767" gradientUnits="userSpaceOnUse">
                                                                        <stop stop-color="#51B6FF" />
                                                                        <stop offset="1" stop-color="#4F7CFF" />
                                                                    </linearGradient>
                                                                    <linearGradient id="paint1_linear_3654_3388"
                                                                        x1="2.57108" y1="11.6854" x2="89.4731"
                                                                        y2="36.4111" gradientUnits="userSpaceOnUse">
                                                                        <stop stop-color="#51B6FF" />
                                                                        <stop offset="1" stop-color="#4F7CFF" />
                                                                    </linearGradient>
                                                                    <clipPath id="clip0_3654_3388">
                                                                        <rect width="94" height="57"
                                                                            fill="white" />
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <div class="overflow-hidden me-auto">
                                                            <h5 class="font-size-14 text-truncate mb-1"><a
                                                                    href="javascript: void(0);"
                                                                    class="text-body">Applications</a></h5>
                                                            <p class="text-muted text-truncate mb-0">20 Files</p>
                                                        </div>
                                                        <div class="align-self-end ms-2">
                                                            <p class="text-muted mb-0">8GB</p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- end col -->

                                </div>
                                <!-- end row -->
                            </div>

                            <div class="mt-4">
                                <div class="d-flex flex-wrap">
                                    <h5 class="font-size-16 me-3">Recent Files</h5>

                                    <div class="ms-auto">
                                        <a href="javascript: void(0);" class="fw-medium text-reset">View All</a>
                                    </div>
                                </div>
                                <hr class="mt-2">

                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Date modified</th>
                                                <th scope="col" colspan="2">Size</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="javascript: void(0);" class="text-dark fw-medium"><i
                                                            class="mdi mdi-file-document font-size-16 align-middle text-primary me-2"></i>
                                                        index.html</a></td>
                                                <td>12-10-2020, 09:45</td>
                                                <td>09 KB</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a class="font-size-16 text-muted" role="button"
                                                            data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Open</a>
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Rename</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Remove</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="javascript: void(0);" class="text-dark fw-medium"><i
                                                            class="mdi mdi-folder-zip font-size-16 align-middle text-warning me-2"></i>
                                                        Project-A.zip</a></td>
                                                <td>11-10-2020, 17:05</td>
                                                <td>115 KB</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a class="font-size-16 text-muted" role="button"
                                                            data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Open</a>
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Rename</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Remove</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="javascript: void(0);" class="text-dark fw-medium"><i
                                                            class="mdi mdi-image font-size-16 align-middle text-muted me-2"></i>
                                                        Img-1.jpeg</a></td>
                                                <td>11-10-2020, 13:26</td>
                                                <td>86 KB</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a class="font-size-16 text-muted" role="button"
                                                            data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Open</a>
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Rename</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Remove</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="javascript: void(0);" class="text-dark fw-medium"><i
                                                            class="mdi mdi-text-box font-size-16 align-middle text-muted me-2"></i>
                                                        update list.txt</a></td>
                                                <td>10-10-2020, 11:32</td>
                                                <td>08 KB</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a class="font-size-16 text-muted" role="button"
                                                            data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Open</a>
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Rename</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Remove</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="javascript: void(0);" class="text-dark fw-medium"><i
                                                            class="mdi mdi-folder font-size-16 align-middle text-warning me-2"></i>
                                                        Project B</a></td>
                                                <td>10-10-2020, 10:51</td>
                                                <td>72 KB</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a class="font-size-16 text-muted" role="button"
                                                            data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Open</a>
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Rename</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Remove</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="javascript: void(0);" class="text-dark fw-medium"><i
                                                            class="mdi mdi-text-box font-size-16 align-middle text-muted me-2"></i>
                                                        Changes list.txt</a></td>
                                                <td>09-10-2020, 17:05</td>
                                                <td>07 KB</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a class="font-size-16 text-muted" role="button"
                                                            data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Open</a>
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Rename</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Remove</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="javascript: void(0);" class="text-dark fw-medium"><i
                                                            class="mdi mdi-image font-size-16 align-middle text-success me-2"></i>
                                                        Img-2.png</a></td>
                                                <td>09-10-2020, 15:12</td>
                                                <td>31 KB</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a class="font-size-16 text-muted" role="button"
                                                            data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Open</a>
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Rename</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Remove</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="javascript: void(0);" class="text-dark fw-medium"><i
                                                            class="mdi mdi-folder font-size-16 align-middle text-warning me-2"></i>
                                                        Project C</a></td>
                                                <td>09-10-2020, 10:11</td>
                                                <td>20 KB</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a class="font-size-16 text-muted" role="button"
                                                            data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Open</a>
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Rename</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Remove</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="javascript: void(0);" class="text-dark fw-medium"><i
                                                            class="bx bxs-file font-size-16 align-middle text-primary me-2"></i>
                                                        starter-page.html</a></td>
                                                <td>08-10-2020, 03:22</td>
                                                <td>11 KB</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a class="font-size-16 text-muted" role="button"
                                                            data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="mdi mdi-dots-horizontal"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Open</a>
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Rename</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Remove</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end w-100 -->
            </div>
        </div>
    </div>
@endsection
