import React from "react";
import { Link } from "react-router-dom";
import "bootstrap/dist/css/bootstrap.rtl.min.css";
import SeoPage from "./SeoPage";
import Loader from "./Loader";
const ErrorPage = () => {
  return (
    
    <>
    <SeoPage
    titlePage="خطا - پیدا نشدن صفحه موردنظر"
    description=""
    keywords=""
    revised="-1"
    robots="true"
  />
    
      <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="row text-center justify-content-center">
          <div class=" col-md-12">
          <Loader width={"100%"} height={"10vh"}>
            <img
              src="../assets/images/svg/errorpage.svg"
              className="img-fluid rounded-3 text-center"
              width={'35%'}
              height={""}
              alt="خطای پیدا نشدن صفحه موردنظر"
              title="خطای پیدا نشدن صفحه موردنظر"
            />
            </Loader>
          </div>
          <div class=" col-md-10 mt-5">
            <Loader width={"100%"} height={"10vh"}>
            <p class="fs-3">
              <span class="text-color2">ببخشید این مورد پیدا نشد</span>
            </p></Loader>
            <Loader width={"100%"} height={"10vh"}>
            <p class="small">صفحه ای که به دنبال آن هستید وجود ندارد</p>
            </Loader>
            <Loader width={"100%"} height={"10vh"}>
            <Link to="/" class="btn btn-outline-primary shadow-lg">
              برگشت به صفحه اصلی
            </Link>
            </Loader>
          </div>
        </div>
      </div>
    </>
  );
};

export default ErrorPage;
