import { MetaTags } from "react-meta-tags";
// import { useState } from "react";

const yesterdayIR = (prevesDay) => {
  let options = {
    year: "numeric",
    month: "2-digit",
    day: "2-digit",
    formatMatcher: "basic",
  };
  let d = new Date();
  d.setDate(d.getDate() - prevesDay);
  return d.toLocaleDateString("fa-IR", options).split("T")[0];
};
const yesterdayEN = (prevesDay) => {
    let options = {
      year: "numeric",
      month: "2-digit",
      day: "2-digit",
      formatMatcher: "basic",
    };
    let d = new Date();
    d.setDate(d.getDate() - prevesDay);
    return d.toLocaleDateString(options).split("T")[0];
  };

const Company = "امیررضا حیدری - Amirreza Heydari";

export default function SeoPage(props) {
  // return CallBack !== true ? setrobotTag(true) : setrobotTag(false) ;
  // <meta name="robots" content="noindex" />
  // const [RobotTag, setRobotTag] = useState();
  // function handleClick(CallBack) {
  //   if (CallBack === "true") {
  //     setRobotTag('index,follow');
  //     return RobotTag;
  //   } else {
  //     setRobotTag('noindex,nofollow');
  //     return RobotTag;
  //   }
  // }

  function checkRobots({ robots = props.robots }) {
    if (robots === true || 'true' || "true") {
      return "index,follow";
    } else {
      return "noindex,nofollow";
    }
  }

  return (
    <>
      <MetaTags>
        <title>{props.titlePage}</title>
        <meta name="description" content={props.description} />
        <meta property="og:title" content={props.titlePage} />
        {/* icon */}
        <link rel="icon" type="image/x-icon" href="../assets/images/Logo.png" />
        <meta property="og:image" content="../assets/images/Logo.png" />
        {/*  */}
        <meta name="keywords" content={props.keywords} />
        <meta name="copyright" content={Company}></meta>
        <meta name="robots" content={checkRobots(true)} />
        <meta name="revised" content={yesterdayEN(props.revised)} />
      </MetaTags>
    </>
  );
}
export {yesterdayEN,yesterdayIR}