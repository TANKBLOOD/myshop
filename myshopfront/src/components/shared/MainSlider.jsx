import axios from "axios";
import { useEffect, useState } from "react";
import { FaArrowAltCircleLeft, FaArrowAltCircleRight } from "react-icons/fa";
import "../../styles/shared/main-slider.css";

const MainSlider = () => {
  const [mainSliderElements, setMainSliderElements] = useState([]);
  const [sliderCount, setSliderCount] = useState(0);
  const [current, setCurrent] = useState(0);
  const [hasInterval, setHasInterval] = useState(false);
  const [intervalId, setIntervalId] = useState(0);

  const getMainSlider = () => {
    const url = "http://127.0.0.1:8000/api/mainSlider/mainList";
    axios.get(url).then((res) => {
      setMainSliderElements(res.data.sliders);
      setSliderCount(res.data.sliders.length);
    });
  };

  const nextSlide = () => {
    setCurrent((prev) => {
      return prev === sliderCount - 1 ? 0 : prev + 1;
    });
  };

  const prevSlide = () => {
    setCurrent((prev) => {
      return prev === 0 ? sliderCount - 1 : prev - 1;
    });
  };
  useEffect(() => {
    getMainSlider();
  }, []);

  useEffect(() => {
    var theInterval = 0;

    if (hasInterval) {
      clearInterval(intervalId);

      theInterval = setInterval(() => {
        nextSlide();
      }, 5000);

      setIntervalId(theInterval);

    } else {
      theInterval = setInterval(() => {
        nextSlide();
      }, 5000);
      
      setIntervalId(theInterval);
      setHasInterval(true);
    }

    return () => clearInterval(theInterval);
  }, [sliderCount]);

  if (!Array.isArray(mainSliderElements) || mainSliderElements.length <= 0) {
    return null;
  }

  return (
    <>
      <section className="slider">
        <FaArrowAltCircleLeft className="left-arrow" onClick={prevSlide} />
        <FaArrowAltCircleRight className="right-arrow" onClick={nextSlide} />
        {mainSliderElements.map((slide, index) => {
          return (
            <div
              className={index === current ? "slide active" : "slide"}
              key={index}
            >
              {index === current && (
                <img
                  src={`http://localhost:8000/mainSlider/image/${slide.image}`}
                  alt="travel image"
                  className="image"
                />
              )}
            </div>
          );
        })}
      </section>
    </>
  );
};

export default MainSlider;
