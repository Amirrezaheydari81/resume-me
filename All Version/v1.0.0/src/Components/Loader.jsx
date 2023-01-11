import React, { useEffect } from "react";
// eslint-disable-next-line no-unused-vars
import ContentLoader from "react-content-loader";
const Loader = (props) => {
  const [showElement, setShowElement] = React.useState(true);
  useEffect(() => {
    setTimeout(function () {
      setShowElement(false);
    }, 3000);
  });
  return (
    <>
      {showElement ? (
        <div>
          <ContentLoader
            speed={2}
            width={props.width}
            height={props.height}
            viewBox="0 0 100vw 100vh"
            backgroundColor="#d9d9d9"
            foregroundColor="#969696"
            className={props.class}
          >
            <rect
              x="0"
              y="10"
              rx="0"
              ry="0"
              width={props.width}
              height={props.height}
            />
          </ContentLoader>
        </div>
      ) : (
        <>{props.children}</>
      )}
    </>
  );
};
export default Loader;
