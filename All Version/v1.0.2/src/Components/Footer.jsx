import "bootstrap/dist/css/bootstrap.rtl.min.css";
import { yesterdayIR, yesterdayEN } from "./SeoPage";
export default function Footer() {
  return (
    <>
      <script
        src="//instant.page/5.1.1"
        type="module"
        integrity="sha384-MWfCL6g1OTGsbSwfuMHc8+8J2u71/LA8dzlIN3ycajckxuZZmF+DNjdm7O6H3PSq"
      ></script>
      <div className="container">
        <footer className="flex-wrap justify-content-center align-items-center py-3 my-4 border-top">
          <div className="col-md-12 align-items-center">
            <div className="row justify-content-center">
              <div className="col-3 text-center">
                <p
                  className="text-center btn btn-info"
                  title={"تاریخ آخرین بروزرسانی سایت"}
                >
                  {yesterdayIR(0)}
                  <br />
                  <span className="small">تاریخ آخرین بروزرسانی سایت</span>
                </p>
              </div>
              <div className="col-3 text-center">
                <p
                  className="text-center btn btn-info"
                  title={"The date of the last update of the site"}
                >
                  {yesterdayEN(0)}
                  <br />
                  <span className="small">The date of the last update of the site</span>
                </p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </>
  );
}
